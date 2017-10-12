<?php
class Login_model extends CI_Model
{
	function canlogin($username,$password)
	{

		$this->db->where('Username',$username);
		$this->db->where('Password',$password);
		$query1=$this->db->get('admin');
		if($query1->num_rows() > 0)
		{
			$name=$this->db->query("select * from admin where Username='$username'");

			$row=$name->row();
			if(isset($row))
			{
				$fname=$row->Full_Name;
			}

			$session_data=array(
					'fullname' => $fname
			);
			$this->session->set_userdata($session_data);

			return true;
		}
		else
		{
			return false;
		}
	}
	function Employeesearch()
		{
			$searchid=$this->input->post('txtid');
			$res=$this->db->query("select * from emptbl where Username='$searchid' or Email_Id='$searchid'");
			$number=$res->num_rows();
			//echo "<h1 style='font-size:100px;'>".$number."</h1>";
			if($number > 0)
			{
				return $res->result();
			}
			else
			{
				return false;
			}
		}
		function msgdatabase()
		{
		$unamee=$this->input->post('Username');
		$sub=$this->input->post('Subject');
		$admin=$this->input->post('admin');
		$message=$this->input->post('Message');
		date_default_timezone_set("Asia/Kolkata");
		$msgtimee=date("d/m/y h:i:sa");

		$data=array(
			'Username'=>$admin,
			'Subject'=>$sub,
			'Message'=>$message,
			'reciever'=>$unamee,
			'msgtime'=>$msgtimee,
		);
		$this->db->insert("messagetbl",$data);
	
		
		}
		function updaterecord()
		{
			$data=array(
				'First_Name'=>$this->input->post('txtname'),
				'Last_Name'=>$this->input->post('txtage'),
				'Email_Id'=>$this->input->post('txtemail'),
				'Address'=>$this->input->post('txtdesig'),
				'Date_Of_Joining'=>$this->input->post('txtdoj'),
				'Qualification'=>$this->input->post('txtsal'),
				'Mobile'=>$this->input->post('txtcity')
			);

			$id=$this->input->post('txtid');
			$this->db->where('Id',$id);


			$this->db->update('emptbl',$data);

			 return true;



		}

	function addnewadminn($fname,$uname,$email,$pwd)
	{
		$rec=array(
		"Full_Name"=>$fname,
		"Username"=>$uname,
		"Email_Id"=>$email,
		"Password"=>$pwd);

			if($this->db->insert("admin",$rec))
			{
				return true;
			}
			else
			{
				return false;
			}
	}
	function workreportemp()
	{
		$a=$this->db->query("select * from emploginlogoutdetails ORDER BY Log_in DESC");
		return $a->result();
	}
	function Showall()
	{
		$a=$this->db->get("emptbl");
		return $a->result();
	}
	function Showalladmin()
	{
		$a=$this->db->get("admin");
		return $a->result();
	}
	function showresigmsg()
	{	
		$a=$this->db->query("select * from messagetbl where Subject='Resignation' and reciever='admin' ORDER BY msgtime DESC");
		return $a->result();
	}
	function showleavemsg()
	{	
		$a=$this->db->query("select * from messagetbl where Subject='Leave' and reciever='admin' ORDER BY msgtime DESC");
		return $a->result();
	}
	function showothermsg()
	{	
		$a=$this->db->query("select * from messagetbl where Subject='message' and reciever='admin' ORDER BY msgtime DESC");
		return $a->result();
	}
	function deleterecord()
	{
		$id=$this->input->post('txtid');
		$this->db->where('Emp_id',$id);
		$this->db->delete('employee');
		return true;
	}
}
?>
