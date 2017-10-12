<?php
class Main_controller extends CI_Controller
{
	function index()
	{
		$this->load->view("Login_view");
		$this->load->view("details_view");
		$this->load->view('footer');
	}
	function loginpage()
	{
		$this->load->view("Login_view");
		$this->load->view("Login_page_view");
		$this->load->view('footer');
	}
	function addadmin()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->view("AdminPage_view");
			$this->load->view("AdminRegisterPage_view");
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}

	}

	function checkempstatus()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->model('Login_model');
			$data['record']=$this->Login_model->workreportemp();
			$this->load->view("AdminPage_view");
			$this->load->view("AddEmp_view",$data);
			$this->load->view("footer");

		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}

	}
	function checkmsgs()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->view("AdminPage_view");
			$this->load->view('checkmsgpage');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}
	}
	function resigmsg()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->model('Login_model');
			$a['record']=$this->Login_model->showresigmsg();
			$this->load->view('msgtableview',$a);
			

			/*$this->load->view("AdminPage_view");
			$this->load->view('checkmsgpage');
			$this->load->view('footer');*/
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}
	}
	function leavemsg()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->model('Login_model');
			$a['record']=$this->Login_model->showleavemsg();
			$this->load->view('msgtableview',$a);
			

			/*$this->load->view("AdminPage_view");
			$this->load->view('checkmsgpage');
			$this->load->view('footer');*/
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}
	}
	function replymsg()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->view("AdminPage_view");
			$this->load->view('checkmsgpage');
			$this->load->view('replymsg');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}
	}
	function msgtodatabase()
	{
		if($this->session->userdata('fullname')!= '')
		{
				$this->form_validation->set_rules('Username', 'Subject', 'required');
				$this->form_validation->set_rules('Subject', 'Subject', 'required');
				$this->form_validation->set_rules('Message', 'Message', 'required');
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				if($this->form_validation->run()==false)
				{
					$dar['info']="Unsuccessfull Update, Try Again (Read The Error Status Below)";
					$this->load->view("AdminPage_view");
					$this->load->view('checkmsgpage');
					$this->load->view('replymsg',$dar);
					$this->load->view('footer');
				}
				else
				{
					$this->load->model('Login_model');
					$this->Login_model->msgdatabase();
					$dr['success']="MESSAGE SUCCESSFULLY SENT";
					$this->load->view("AdminPage_view");
					$this->load->view('checkmsgpage');
					$this->load->view('replymsg',$dr);
					$this->load->view('footer');
				}
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}
	}
	function othermsg()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->model('Login_model');
			$a['record']=$this->Login_model->showothermsg();
			$this->load->view('msgtableview',$a);
			

			/*$this->load->view("AdminPage_view");
			$this->load->view('checkmsgpage');
			$this->load->view('footer');*/
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');

		}
	}
	function addemp_check()
	{
		$this->load->library('form_validation');
		 $this->form_validation->set_rules('txtfname', 'Fullname', 'required|min_length[5]');
       	 $this->form_validation->set_rules('txtage', 'Age', 'required');
       	 $this->form_validation->set_rules('txtid', 'Employee ID', 'required');
       	 $this->form_validation->set_rules('txtemail', 'Email', 'required');
       	 $this->form_validation->set_rules('txtdesig', 'Designation', 'required');
       	 $this->form_validation->set_rules('txtdate', 'Date', 'required');
       	 $this->form_validation->set_rules('txtsal', 'Salary', 'required');
       	 $this->form_validation->set_rules('txtcity', 'City', 'required');

        if ($this->form_validation->run() == FALSE)
          {
          		$this->load->view("AdminPage_view");
				$this->load->view("AddEmp_view");
				$this->session->set_flashdata('errors','');
          }
          else
          {

				$fname=$this->input->post('txtfname');
				$age=$this->input->post('txtage');
				$id=$this->input->post('txtid');
				$email=$this->input->post('txtemail');
				$desig=$this->input->post('txtdesig');
				$date=$this->input->post('txtdate');
				$sal=$this->input->post('txtsal');
				$city=$this->input->post('txtcity');

				$this->load->model('Login_model');

				if($this->Login_model->addemp($fname,$age,$id,$email,$desig,$date,$sal,$city))
				{
							$this->session->set_flashdata('errors','Successfully Added New Employee To The Database');
							$this->load->view("AdminPage_view");
							$this->load->view("AddEmp_view");//return true
							$this->load->view('footer');
				}
				else
				{
							$this->session->set_flashdata('errors','Error adding new employee');
							$this->load->view("AdminPage_view");
							$this->load->view("AddEmp_view");//return false
							$this->load->view('footer');
				}
		  }

	}

	function logincheck()
	{
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('txtuser', 'Username', 'required');
       	 $this->form_validation->set_rules('txtpwd', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
          {
          		$this->load->view("Login_view");
				$this->load->view("Login_page_view");
				$this->load->view('footer');
          }
          else
          {

				$username=$this->input->post('txtuser');
				$password=$this->input->post('txtpwd');

				$this->load->model('Login_model');
				if($this->Login_model->canlogin($username,$password))
				{

					redirect(base_url().'index.php/Main_controller/adminpage');

				}
				else
				{
					$this->session->set_flashdata('error','Invalid Username And Password');
					redirect(base_url().'index.php/Main_controller/loginpage');

				}
		   }
	}
	function addnewadmin()
	{
		$this->load->library('form_validation');
		 $this->form_validation->set_rules('fname', 'Fullname', 'required');
       	 $this->form_validation->set_rules('uname', 'Username', 'required');
       	  $this->form_validation->set_rules('email', 'Email', 'required');
       	 $this->form_validation->set_rules('pwd', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
          {
          		$this->session->set_flashdata('errors','');
          		$this->load->view("AdminPage_view");
				$this->load->view("AdminRegisterPage_view");
				$this->load->view('footer');

          }
          else
          {


			$fname=$this->input->post('fname');
			$uname=$this->input->post('uname');
			$email=$this->input->post('email');
			$pwd=$this->input->post('pwd');

			$this->load->model('Login_model');

				if($this->Login_model->addnewadminn($fname,$uname,$email,$pwd))
					{

						$this->session->set_flashdata('errors','Successfully Added New Admin');
						$this->load->view("AdminPage_view");

						$this->load->view("AdminRegisterPage_view");
						$this->load->view('footer');

					}
				else
					{
						$this->session->set_flashdata('errors','Error adding new admin');
						$this->load->view("AdminPage_view");

						$this->load->view("AdminRegisterPage_view");
						$this->load->view('footer');
					}

			}
	}
	function searchmodify()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->view('AdminPage_view');
			$this->load->view('searchemp');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');
		}
	}

	function showallempview()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->view("AdminPage_view");
			$this->load->model('Login_model');
			$f['rec']=$this->Login_model->Showall();
				if($f!='')
				{
					$this->load->view("showempview",$f);
					$this->load->view('footer');

				}
				else
				{
					$this->load->view("showempview");
					$this->load->view('footer');

				}

		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');
		}

	}
	function ajaxadmin()
	{
		$this->load->model('Login_model');
		$a['record']=$this->Login_model->Showalladmin();
		$this->load->view('admintableview',$a);
		

	}
	function adminpage()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->view("AdminPage_view");
			$this->load->view("details_view");
			$this->load->view("admintable");
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('fullname');
		redirect(base_url().'index.php/Main_controller/loginpage');

	}

	function searchempval()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->model('Login_model');
			$f['rec']=$this->Login_model->Employeesearch();
			/*if($f==true)
			{
				echo "<h1 style='font-size:100px;'>0asd0 entered if</h1>";
				$msg['a']="No Employee Found!";
				$this->load->view("AdminPage_view");
				$this->load->view('searchemp');
				$this->load->view('msg',$msg);
			}
			else*/ if($f['rec']==false)
			{
				
				$msg['a']="No such record found";
				$this->load->view("AdminPage_view");
				$this->load->view('searchemp');
				$this->load->view('msg',$msg);
				$this->load->view('footer');
				# code...
				//echo "<h1 style='font-size:100px;'>entered else</h1>";
			}
			else
			{
				$this->load->view("AdminPage_view");
				$this->load->view('searchemp');
				$this->load->view("showemptableresultview",$f);
				$this->load->view('footer');
			}
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');
		}
	}

	function updaterecord()
	{
		if($this->session->userdata('fullname')!= '')
		{
				$this->load->model('Login_model');
				$f=$this->Login_model->updaterecord();
				if($f==true)
				{
					$msg['a']="Successfully Updated!";
					$this->load->view("AdminPage_view");
					$this->load->view('searchemp');
					$this->load->view('msg',$msg);
					$this->load->view('footer');
				}

		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');
		}
	}
	function deleteempview()
	{
		if($this->session->userdata('fullname')!= '')
		{
			$this->load->view('AdminPage_view');
			$this->load->view('deleteemp');
			$this->load->view('footer');
		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');
		}
	}
	function deleteempval()
	{
		if($this->session->userdata('fullname')!= '')
		{
				$this->load->model('Login_model');
				$f=$this->Login_model->deleterecord();
				if($f==true)
				{
					$msg['a']="Successfully Deleted!";
					$this->load->view("AdminPage_view");
					$this->load->view('deleteemp');
					$this->load->view('msg',$msg);
					$this->load->view('footer');
				}

		}
		else
		{
			redirect(base_url().'index.php/Main_controller/loginpage');
		}
	}

}
?>
