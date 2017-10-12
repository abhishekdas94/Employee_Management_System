<?php
class Emp_Model extends CI_MODEL
{
	function generateuser()
	{
		$uname=$this->input->post('nm');
		$uname=substr($uname,2,6);

		$name=$this->db->query("select * FROM emptbl order by Id DESC LIMIT 1");
		$row=$name->row();
		if (isset($row)) {
			$cid=$row->Id;
			$cid++;# code...s
			$uname=$uname."00".$cid;
		}
		return $uname;
		/*$chck=$this->db->query("select * from Emptbl where Username='$uname'");
		if ($chck->row()==0) {
			return $uname;
		}
		else
		{	
			return $uname.rand().$cid;
		}*/
	}
	function logincheck()
	{
		$email=$this->input->post('email');
		$pwd=md5($this->input->post('password'));
		$result=$this->db->query("select * from emptbl where Email_Id='$email' and Password='$pwd'");
		if($result->num_rows()!=0)
		{
			$unme=$this->db->query("select * from emptbl where Email_Id='$email'");
			$data=$unme->row();
			
			if (isset($data)) 
			{
				$fnme=$data->First_Name." ".$data->Last_Name;
				$uname=$data->Username;
				$img=$data->Image;
				$addr=$data->Address;
				$qualai=$data->Qualification;
				$mob=$data->Mobile;
				$doja=$data->Date_Of_Joining;


				date_default_timezone_set("Asia/Kolkata");
				$logintime=date("Y-m-d h:i:sa");
				
				$session_data= array(
					'Date_Of_Joining'=>$doja,
					'Mobile'=>$mob,
					'Address'=>$addr,
					'Fullname' => $fnme,
					'Qualification' =>$qualai ,
					'Username' => $uname, 
					'Image'=>$img,
					'Login'=>$logintime,
				);
			}
			$lo="";
			$Wr="";
			$fr="";
			$infos=array(
					'Username'=>$uname,
					'Log_in'=>$logintime,
					'Log_out'=>$lo,
					'Work_report'=>$Wr,
					'filepath'=>$fr
				);
			$this->db->insert('emploginlogoutdetails',$infos);
			
			$this->session->set_userdata($session_data);
			return true;
		}
		else
		{
			return false;
		}
		
	}
	function changepaswd()
	{
		$pwdd=md5($this->input->post('oldpwd'));
		$pwd=md5($this->input->post('newpwd'));
		$ans=$this->db->query("select * from emptbl where Password='$pwdd'");
		if ($ans->num_rows()!=0) {
			$uname=$this->session->userdata('Username');
			$this->db->query("update emptbl set Password='$pwd' where Username='$uname'");
			return true;
		}
		else
		{
			return false;
		}
	}

	function empdetails()
	{
		$uname=$this->session->userdata('Username');
		$r=$this->db->query("select * from emptbl where Username='$uname'");
		/*$data=$r->row();
		if (isset($data)) {
			$fname=$data->First_Name;
			$lname=$data->Last_Name;
		}
		$details=array(
			'fname'=>$fname,
			'lname'=>$lname,
		);*/
		return $r->result();
	}
	function msgdatabase()
	{
		$unamee=$this->session->userdata('Username');
		$sub=$this->input->post('subject');
		$message=$this->input->post('comment');
		$rec="admin";
		date_default_timezone_set("Asia/Kolkata");
		$msgtimee=date("d/m/y h:i:sa");

		$data=array(
			'Username'=>$unamee,
			'Subject'=>$sub,
			'Message'=>$message,
			'reciever'=>$rec,
			'msgtime'=>$msgtimee,
		);
		$this->db->insert("messagetbl",$data);
	
		
	}
	function checkmsga()
	{
		$unamee=$this->session->userdata('Username');
		$a=$this->db->query("select * from messagetbl where Username='admin' and reciever='$unamee' ORDER BY msgtime DESC");
		return $a->result();
	}
	function sendmsgtoadmin()
	{
		$datefrm=$this->input->post('datefrom');
		$datetll=$this->input->post('datetill');
		$comment=$this->input->post('comment');
		$admin="admin";
		date_default_timezone_set("Asia/Kolkata");
		$msgtimee=date("d/m/y h:i:sa");
		$dte="I want a leave from ".$datefrm." till ".$datetll." because ".$comment;
		$subject="Leave";
		$uname=$this->session->userdata('Username');

		$data=array(
			'Username'=>$uname,
			'Subject'=>$subject,
			'Message'=>$dte,
			'reciever'=>$admin,
			'msgtime'=>$msgtimee,
		);
		$this->db->insert("messagetbl",$data);
		
	}
	function empinfoupdate()
	{
		$quali=$this->input->post('quali');
		$mobile=$this->input->post('mobile');
		$address=$this->input->post('address');
		$uname=$this->session->userdata('Username');
		if($this->db->query("update emptbl set Qualification='$quali', Mobile='$mobile', Address='$address' where Username='$uname'"))
		{
			$this->session->unset_userdata('Mobile','Address','Qualification');
			$session_data= array(
					
					'Mobile'=>$mobile,
					'Address'=>$address,
					'Qualification' =>$quali );
			$this->session->set_userdata($session_data);
			return true;
		}
		else
		{
			return false;
		}
	}
	function uploaddata()
	{
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$email=$this->input->post('email');
		$pwd=md5($this->input->post('pwd'));
		$doj=$this->input->post('doj');
		$addr=$this->input->post('address');
		$quali=$this->input->post('quali');
		$mob=$this->input->post('mnum');
		$uname=$this->input->post('uname');

		$result=$this->db->query("select * from emptbl where Username='$uname' or Email_Id='$email'");//if username matches	
		if($result->num_rows()==0)
		{
				$data=array(
					"First_Name"=>$fname,
					"Last_Name"=>$lname,
					"Email_Id"=>$email,
					"Password"=>$pwd,
					"Date_Of_Joining"=>$doj,
					"Address"=>$addr,
					"Qualification"=>$quali,
					"Mobile"=>$mob,
					"Username"=>$uname
				);
				$sdata=array(
				'Username'=>$uname
				);
				$this->session->set_userdata($sdata);
				//
				if($this->db->insert('Emptbl',$data))
				{
					
					return true;
				}
				else
				{
					return false;
				}
		}
		else
		{
			return false;
		}
	}
	function uploadimage($imagepath)
	{
			$uname=$this->session->userdata('Username');
			$this->session->unset_userdata('Image');
			if($this->db->query("update emptbl set Image='$imagepath' where Username='$uname'"))
			{
				$unme=$this->db->query("select * from Emptbl where Username='$uname'");
				$data=$unme->row();
			
				if (isset($data)) 
				{
					$img=$data->Image;
					$session_data= array(
					'Image'=>$img,
				);
				$this->session->set_userdata($session_data);
				return true;
				}
				else
				{
					return false;
				}
			}
	}
	function empworkreport()
	{
		$uname=$this->session->userdata('Username');
		$login=$this->session->userdata('Login');
		$work=$this->input->post('comment');
		$filepath="";
		if($this->db->query("update emploginlogoutdetails set Work_report='$work' where Username='$uname' and Log_in='$login'"))
			{
				
				return true;
			}
			else
			{
				return false;
			}
	}	
	function logouttodatabase()
	{
		$uname=$this->session->userdata('Username');
		date_default_timezone_set("Asia/Kolkata");
		$logouttime=date("Y-m-d h:i:sa");
		$this->db->query("update emploginlogoutdetails set Log_out='$logouttime' where Username='$uname'");
			
	}
	
}

?>