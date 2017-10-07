<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	
	public function index()
	{

		if (isset($_SESSION['username'])) {
			# code...
			$sname=$this->session->username;

			//$sess_name['user']=$this->New_model->get_download_data($sname);
			echo $sname;
			$this->load->view('index');
		}
		else
		{
			$this->load->view('index');
		}
		
	}

	public function sess()
	{

		if (isset($_SESSION['username'])) {
			# code...
			$sname=$this->session->username;

			//$sess_name['user']=$this->New_model->get_download_data($sname);
			echo $sname;
			
		}
		else
		{
			echo "not setstring";
		}
		
	}
	
	public function tutorial()
	{
		$this->load->view('tutorials/tutorial');
	}
	public function downloads()
	{
		$this->load->view('downloads/downloads');
	}
	public function contact()
	{
		$this->load->view('contact/contact');
	}
	public function codes()
	{
		$this->load->view('codes/codes');
	}
	public function code_view()
	{
		$this->load->view('codes/code_view');
	}










	
	

    public function register()
    {
		//set validation rules
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30] ');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30] ');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('univ', 'University Or Profession', 'trim|min_length[3]|max_length[40] ');
		$this->form_validation->set_rules('mob', 'Mobile Number', 'trim|required|min_length[9]|max_length[14] ');
		$this->form_validation->set_rules('addr', 'Address', 'trim|min_length[8]|max_length[60] ');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5|min_length[4]|max_length[40]');
		

		//validate form input
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('user_registration_view');
        }
		else
		{
			//insert the user registration details into database
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'university' => $this->input->post('univ'),
				'mobile' => $this->input->post('mob'),
				'address' => $this->input->post('addr'),
				
				'password' => $this->input->post('password')
			);
			
			// insert form data into database
			if ($this->user_model->insertUser($data))
			{
				// send email
				if ($this->user_model->sendEmail($this->input->post('email')))
				{
					// successfully sent mail
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
					redirect('welcome/register');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
					redirect('welcome/register');
				}
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('welcome/register');
			}
		}
	}
	
	public function verify($hash=NULL)
	{
		if ($this->user_model->verifyEmailID($hash))
		{
			$this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
			redirect('welcome/register');
		}
		else
		{
			$this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
			redirect('welcome/register');
		}
	}








	 public function user_login()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login_view');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->user_model->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">successfully logged in your account!</div>');
			redirect('welcome/login_success');
		
                         	 }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('welcome/user_login');
                    }
               }
               else
               {
                    redirect('welcome/user_login');
               }
          }
     }


public function login_success()
	{
		$this->load->view('login_success_view');
	}






public function upload()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}


public function do_upload()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['max_size']             = 2000;


		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{


			$this->form_validation->set_rules('name', 'File Name', 'trim|required|alpha|min_length[3]|max_length[30] ');
		$this->form_validation->set_rules('cname', 'Course Name', 'trim|required|alpha|min_length[3]|max_length[30] ');
		
		$this->form_validation->set_rules('category', 'Uploaded File category', 'trim|min_length[3]|max_length[40] ');
		$this->form_validation->set_rules('tags', 'Tags', 'trim|min_length[3]|max_length[100] ');
		$this->form_validation->set_rules('category', 'Uploaded File category', 'trim|min_length[3]|max_length[40] ');
		$this->form_validation->set_rules('topic', 'File Topic', 'trim|min_length[3]|max_length[40] ');
		
			$data = array('upload_data' => $this->upload->data());

			$fileName=$this->upload->data('file_name');
			$filePath='uploads/'.$fileName;
			$fileSize=$this->upload->data('file_size');
			$filetype=$this->upload->data('file_ext');

			$this->user_model->upload_file_db([
					'file_name' => $fileName,
					'path' => $filePath,

					'size' => $fileSize,
					'type' => $filetype,

					'name' => $this->input->post('name'),
					'course_name' => $this->input->post('cname'),
					'category' => $this->input->post('category'),
					'code' => $this->input->post('code'),
					'tags' => $this->input->post('tag'),
					'topic' => $this->input->post('topic'),
				
			]);


			$this->load->view('upload_success', $data);
		}
	}


public function download () {


		$datas['upload']=$this->user_model->get_download_data();
		$this->load->view('download_view',$datas);

	}

}
