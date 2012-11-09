<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if (!$this->session->userdata('login_state')) 
		{
      		$this->login_page(NULL);
    	}
    	else
    	{
    		$this->dashboard_page();
    	}
		
	}

	private function login_page($data)
	{
		$this->load->helper('form');
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('page/login', $data);
		$this->load->view('includes/footer');
	}

	public function logon()
	{
		$this->load->model('User_model');

		$login = $_POST['login'];
		$password = $_POST['password'];

		
		if($login !== "" && $password !== "") 
		{ 
			$check_login = $this->User_model->check_login($login, $password);

			if(count($check_login) === 0)
			{
				$data['emptyLogin'] = "Invalid Login";
				
				$this->login_page($data);
			}
			else
			{
				$this->session->set_userdata('login_state', TRUE);
				header("Location: /dashboard");
			}			
		}
		else
		{
			$data['emptyLogin'] = ($login === "") ? "Please enter your login" : "";
			$data['emptyPassword'] = ($password === "") ? "Please enter your password" : "";

			$this->login_page($data);
		}			
	}

	public function dashboard()
	{
		$this->dashboard_page();
	}

	private function dashboard_page()
	{
		$page['page'] = 1;
    	$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/menu', $page);
		$this->load->view('page/dashboard');
		$this->load->view('includes/footer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo "You are successfully Logout, will be directed in 5 seconds";
		header( "refresh:5;url=/" );

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */