<?php

/**
 * @property  email
 */
class user_model extends CI_Model
{
	function __construct()
    {
		$this->load->library('email');
        // Call the Model constructor
        parent::__construct();
    }
	
	//insert into user table
	function insertUser($data)
    {
		return $this->db->insert('user', $data);
	}
	
	//send verification email to user's email id
	function sendEmail($to_email)
	{
		$from_email = 'support@studyphobia.com';
		$subject = 'Verify Your Email Address';
		$message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://[::1]/login/index.php/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Mydomain Team';
		
		//configure email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssg2plcpnl0087.prod.sin2.secureserver.net'; //smtp host name
		$config['smtp_port'] = '465'; //smtp port number
		$config['smtp_user'] = $from_email;
		$config['smtp_pass'] = 'SP2016RaAN007'; //$from_email password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes
		$this->email->initialize($config);
		
		
		//send mail
		$this->email->from($from_email, 'Mydomain');
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		return $this->email->send();
	}
	
	//activate user account
	function verifyEmailID($key)
	{
		$data = array('status' => 1);
		$this->db->where('md5(email)', $key);
		return $this->db->update('user', $data);
	}

	  function get_user($usr, $pwd)
     {
          $sql = "select * from user where fname = '" . $usr . "' and password = '" . md5($pwd) . "' and status = '1'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }


      public function upload_file_db($file_info)
    {
        $this->load->database();
        $this->db->insert('uploads', $file_info);

    }
    public function get_download_data()
    {
        $this->load->database();
        // $sql= $this->db->query("Select * from blog");

        //Active Record

        $sql=$this->db->get("uploads");
        $result=$sql->result();

        return $result;
    }

}