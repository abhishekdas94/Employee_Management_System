<?php

class Employee_Controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->view('empheader');
		$this->load->view('success2');
		$this->load->view('emplogin');
		$this->load->view('footer');
	}
	function login()
	{
		
		$this->form_validation->set_rules('email', 'EmailID/Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run()==false)
		{
			$this->load->view('empheader');
			$this->load->view('emplogin');
			$this->load->view('footer');	
		}
		else
		{
			$this->load->model('Emp_Model');
			$result=$this->Emp_Model->logincheck();
			if ($result==true) 
			{
				if($this->session->userdata('Fullname')!="")
					{
				
						$this->load->view('EmpUserPage');
						$this->load->view('EmpleftBar');
						$this->load->view('empmiddlebar');
						$this->load->view('empinfo');
						$this->load->view('footer');
					}
					else
					{
					redirect(base_url());
					}

			}
			else
			{
				
				$info['datwa']="Unsuccessfull Login, Wrong Combination Of Username Or Password, OR Username doesn't exists.";
				$this->load->view('empheader');
				//$this->load->view('msgdisplay');	
				$this->load->view('emplogin',$info);
				$this->load->view('footer');

			}
		}
	
	}
	function emphomepage()
	{
		if($this->session->userdata('Fullname')!="")
		{
			$this->load->view('EmpUserPage');
			$this->load->view('EmpleftBar');
			$this->load->view('empmiddlebar');
			$this->load->view('empinfo');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url());
		}
	}
	function ajaxdetails()
	{
		$this->load->model('Emp_Model');
		$data['record']=$this->Emp_Model->empdetails();
		$this->load->view('empdetailstable',$data);
	}
	function ajaxupdatedetails()
	{
		$this->load->view('empupdatetable');
		$this->load->view('footer');
	}
	function changepass()
	{
		if($this->session->userdata('Fullname')!="")
		{
			$this->load->view('EmpUserPage');
			$this->load->view('EmpleftBar');
			$this->load->view('empmiddlebar');
			$this->load->view('changepw');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url());
		}
	}
	function changepwd()
	{
		$this->form_validation->set_rules('oldpwd', 'Old Password', 'required');
		$this->form_validation->set_rules('newpwd', 'New Password', 'required');
		$this->form_validation->set_rules('pwd', 'Password Confirmation', 'required|matches[pwd]');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run()==false)
		{
			$this->load->view('EmpUserPage');
			$this->load->view('EmpleftBar');
			$this->load->view('empmiddlebar');
			$this->load->view('changepw');
			$this->load->view('footer');	
		}
		else
		{
			$this->load->model('Emp_Model');
			$answ=$this->Emp_Model->changepaswd();
			if($answ==true)
			{
				$info['success']="Successfully Changed Your Password";
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
				$this->load->view('changepw',$info);
				$this->load->view('footer');
			}
			else
			{
				$info['info']="Wrong Password";
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
				$this->load->view('changepw',$info);
				$this->load->view('footer');
			}
			
			
		}
	}
	function generateusername()
	{
		
		$this->load->model('Emp_Model');
		$name=$this->Emp_Model->generateuser();
		echo "<h2>".$name."</h2>";
	}

	function register()
	{
		$this->load->view('empheader');
		$this->load->view('empregister');
		$this->load->view('footer');
		
		
	}
	function checkingregister()
	{
		$this->form_validation->set_rules('fname', 'Full Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'EmailID', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('pwd2', 'Password Confirmation', 'required|matches[pwd]');
		$this->form_validation->set_rules('doj', 'Date Of Joining', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('mnum', 'Mobile Number', 'required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('quali', 'Qualification', 'required');
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run()==false)
		{
			$this->load->view('empheader');
			$this->load->view('empregister');
			$this->load->view('footer');	
		}
		else
		{
			$this->load->model('Emp_Model');
			$result=$this->Emp_Model->uploaddata();
			if ($result==true) {
				$info['data']="Successfully Registered Add Your Avatar Here:";
				$this->load->view('empheader');
				//$this->load->view('success',$info);
				$this->load->view('uploadimg',$info);
				$this->load->view('footer');
			}
			else
			{
				$info['data']="Unsuccessfull Registration, Username/EmailID is already Registered";
				$this->load->view('empheader');
				//$this->load->view('msgdisplay2',$info);	
				$this->load->view('empregister',$info);
				$this->load->view('footer');	
			}
		}
	}
	function updateimg()
	{
		$config=array();
		$config= [
 			'upload_path' => './uploads',
 			'allowed_types'=> 'gif|jpg|png',
 		];
 		 $this->load->library('upload', $config);
 		 if ( $this->upload->do_upload())
                {
                	 $data=$this->upload->data();
                     $imagepath=base_url("uploads/". $data['raw_name'].$data['file_ext']);
                     $this->load->model('Emp_Model');
                     $resu=$this->Emp_Model->uploadimage($imagepath); 
                     if($resu==true)
                     {
                     	
                     	if($this->session->userdata('Fullname')!="")
							{
								$this->load->view('EmpUserPage');
								$this->load->view('EmpleftBar');
								$this->load->view('empmiddlebar');
								$this->load->view('changepropic');
								$this->load->view('footer');
							}
							else
							{
								redirect(base_url());
							} 
                     	// redirect('Employee_Controller'); 
                     	
                     	//$this->load->view('empheader');
						//$this->load->view('emplogin');
                     }
                     else
                     {
                     	$info['data']="Photo Update was UNSUCCESSFULL";
						$this->load->view('EmpUserPage');
						$this->load->view('EmpleftBar');
						$this->load->view('empmiddlebar');
						$this->load->view('changepropic');
						$this->load->view('msgdisplay',$info);	
						$this->load->view('footer');
						
                     }
                 }
                else
                {
                	echo "<script>alert('notsuccess');</script>";
                	
                		$error = $this->upload->display_errors();
                		$this->load->view('EmpUserPage');
						$this->load->view('EmpleftBar');
						$this->load->view('empmiddlebar');
                        $this->load->view('changepropic', $error);
                        $this->load->view('footer');
                        
                } 
	}
	function sendmsg()
	{
		if($this->session->userdata('Fullname')!="")
			{
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
				$this->load->view('sndmsg');	
				$this->load->view('footer');
			}
			else
			{
				redirect(base_url());
			}
	}
	function workreport()
	{
		if($this->session->userdata('Fullname')!="")
			{
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
				$this->load->view('empworkreport');	
				$this->load->view('footer');
			}
			else
			{
				redirect(base_url());
			}
	}
	function msgtodatabase()
	{
		if($this->session->userdata('Fullname')!="")
			{
				$this->form_validation->set_rules('subject', 'Subject', 'required');
				$this->form_validation->set_rules('comment', 'Message', 'required');
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				if($this->form_validation->run()==false)
				{
					$dar['info']="Unsuccessfull Update, Try Again (Read The Error Status Below)";
					$this->load->view('EmpUserPage');
					$this->load->view('EmpleftBar');
					$this->load->view('empmiddlebar');
					$this->load->view('sndmsg',$dar);
					$this->load->view('footer');	
				}
				else
				{
					$this->load->model('Emp_Model');
					$this->Emp_Model->msgdatabase();
					$dr['success']="MESSAGE SUCCESSFULLY SENT";
					$this->load->view('EmpUserPage');
					$this->load->view('EmpleftBar');
					$this->load->view('empmiddlebar');
					$this->load->view('sndmsg',$dr);
					$this->load->view('footer');	
				}
			}
			else
			{
				redirect(base_url());
			}
	}
	function checkmsg()
	{
		if($this->session->userdata('Fullname')!="")
			{
				$this->load->model('Emp_Model');
				$table['record']=$this->Emp_Model->checkmsga();
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
				$this->load->view('checkmessage',$table);
				$this->load->view('footer');	
			}
			else
			{
				redirect(base_url());
			}
	}
	function sendleavedata()
	{
		
		if($this->session->userdata('Fullname')!="")
			{
				$this->form_validation->set_rules('datefrom', 'Date From', 'required');
				$this->form_validation->set_rules('datetill', 'Date Till', 'required');
				$this->form_validation->set_rules('comment', 'Message', 'required');
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				if($this->form_validation->run()==false)
				{
					$dar['info']="Status: Unsuccessfull, Try Again (Read The Error Status Below)";
					$this->load->view('EmpUserPage');
					$this->load->view('EmpleftBar');
					$this->load->view('empmiddlebar');
					$this->load->view('leavedate',$dar);
					$this->load->view('footer');	
				}
				else
				{
					$this->load->model('Emp_Model');
					$this->Emp_Model->sendmsgtoadmin();
					$dr['success']="MESSAGE SUCCESSFULLY SENT";
					$this->load->view('EmpUserPage');
					$this->load->view('EmpleftBar');
					$this->load->view('empmiddlebar');
					$this->load->view('leavedate',$dr);
					$this->load->view('footer');	
				}
			}
			else
			{
				redirect(base_url());
			}
}
	function holidaylist()
	{
		if($this->session->userdata('Fullname')!="")
			{
				
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
				$this->load->view('holidayliste');
				$this->load->view('footer');
			}
			else
			{
				redirect(base_url());
			}

	}
	function applyleave()
	{
		if($this->session->userdata('Fullname')!="")
			{
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
				$this->load->view('leavedate');
				$this->load->view('footer');
			}
			else
			{
				redirect(base_url());
			}
	}
	function empupdateinfo()
	{
		if($this->session->userdata('Fullname')!="")
			{
					
					$this->form_validation->set_rules('address', 'Address', 'required');
					$this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]|max_length[10]');
					$this->form_validation->set_rules('quali', 'Qualification', 'required');
					$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
					if($this->form_validation->run()==false)
					{
						$dar['info']="Unsuccessfull Update, Try Again (Read The Error Status Below)";
						$this->load->view('EmpUserPage');
						$this->load->view('EmpleftBar');
						$this->load->view('empmiddlebar');
			        	$this->load->view('edipro',$dar);
			        	$this->load->view('footer');


					}
					else
					{
						$this->load->model('Emp_Model');
						$status=$this->Emp_Model->empinfoupdate();
						if($status==true)
						{
							$dar['info']="Successfully Updated!";
							$this->load->view('EmpUserPage');
							$this->load->view('EmpleftBar');
							$this->load->view('empmiddlebar');
				        	$this->load->view('edipro',$dar);
				        	$this->load->view('footer');
						}
					}

									
			}
			else
			{
				redirect(base_url());
			}
	}
	function empwworkreport()
	{
		if($this->session->userdata('Fullname')!="")
			{
		/*$config['upload_path'] = './uploads/workreport/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload',$config);
        //$data = array('upload_data' => $this->upload->data());
       // var_dump($this->upload->do_upload());die;

        if ($this->upload->do_upload())
                {
                     
                     $data=$this->upload->data();
                     $filepath=base_url("uploads/". $data['raw_name'].$data['file_ext']);*/
                     $this->load->model('Emp_Model');
                     $resu=$this->Emp_Model->empworkreport();  
                     if($resu==true)
                     {
                     		$dar['success']="Successfully Submitted!";
							$this->load->view('EmpUserPage');
							$this->load->view('EmpleftBar');
							$this->load->view('empmiddlebar');
				        	$this->load->view('empworkreport',$dar);
				        	$this->load->view('footer');
                     }
                     else
                     {
                     	$info['info']="Submition Of Work Report: Unsuccessfull ";
						$this->load->view('EmpUserPage');
						$this->load->view('EmpleftBar');
						$this->load->view('empmiddlebar');
				        $this->load->view('empworkreport',$info);
				        $this->load->view('footer');	
                     }
                /*}
                else
                {
                		echo "<script>alert('Unsuccessfull');</script>";
                		$error = $this->upload->display_errors();
                		$this->load->view('EmpUserPage');
						$this->load->view('EmpleftBar');
						$this->load->view('empmiddlebar');
                        $this->load->view('empworkreport', $error);
                        $this->load->view('footer');
                        
                }*/
                }
			else
			{
				redirect(base_url());
			}
	}
	function uploadimage()
	{
	
 		$config= [
 			'upload_path' => './uploads',
 			'allowed_types'=> 'gif|jpg|png',
 		];

        $this->load->library('upload', $config);
        if ( $this->upload->do_upload())
                {
                     //$info['data'] = "Successfully Addded Image";
                    // $this->load->view('success',$info);
                     $data=$this->upload->data();
                     $imagepath=base_url("uploads/". $data['raw_name'].$data['file_ext']);
                     $this->load->model('Emp_Model');
                     $resu=$this->Emp_Model->uploadimage($imagepath);  
                     
                     if($resu==true)
                     {
                     	
                     	//$ssdata=array(
                     	// 	'info'=>'Successfully Registered! Now Login To Get The Full Access!'
                    	// );
                    	//$this->session->set_userdata($ssdata); 
                    	$infoa['datwa']="Successfull Registration Now Login To Enter"; 
                     	$this->load->view('empheader');
						//$this->load->view('success2');
						$this->load->view('emplogin',$infoa);
						$this->load->view('footer'); 
                     	
                     	//$this->load->view('empheader');
						//$this->load->view('emplogin');
                     }
                     else
                     {
                     	$info['data']="Unsuccessfull Registration";
						$this->load->view('empheader');
						//$this->load->view('msgdisplay',$info);	
						$this->load->view('empregister',$info);
						$this->load->view('footer');	
                     }
                 }
                else
                {
                		 $error = $this->upload->display_errors();

                        $this->load->view('uploadimg', $error);
                        $this->load->view('footer');
                        
                }
        }
        function changepic()
        {
        	if($this->session->userdata('Fullname')!="")
			{
	        	$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
	        	$this->load->view('changepropic');
	        	$this->load->view('footer');
        	}
			else
			{
				redirect(base_url());
			}
        }
        function editpro()
        {
        	if($this->session->userdata('Fullname')!="")
			{
				$this->load->view('EmpUserPage');
				$this->load->view('EmpleftBar');
				$this->load->view('empmiddlebar');
	        	$this->load->view('edipro');
	        	$this->load->view('footer');
			}
			else
			{
				redirect(base_url());
			}

        }
    function logout()
    {

    	$this->load->model('Emp_Model');
    	$this->Emp_Model->logouttodatabase();
    	$this->session->unset_userdata('Fullname');

    	$info['datwa']="Successfully Logged Out.";
		$this->load->view('empheader');
		$this->load->view('emplogin',$info);
		$this->load->view('footer');
    	

    }   
	function aboutus()
	{
		if($this->session->userdata('Fullname')!="")
		{
			$this->load->view('EmpUserPage');
			$this->load->view('aboutus');
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('empheader');
			$this->load->view('aboutus');
			$this->load->view('footer');
		}
		
	}
	function contactus()
	{
		if($this->session->userdata('Fullname')!="")
		{
			$this->load->view('EmpUserPage');
			$this->load->view('contactus');
			
			$this->load->view('footer');
		}
		else
		{
			$this->load->view('empheader');
			$this->load->view('contactus');
			
			$this->load->view('footer');
		}
		
	}
}

?>