<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

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
		$this->student_list(NULL);
	}

	public function student_testList()
	{
		$this->student_testList_page(NULL);
	}

	public function student_add()
	{
		$this->student_add_page(NULL);
	}

	public function student_edit()
	{
		$this->student_edit_page(NULL);
	}

	private function student_list($data)
	{
		$data['page'] = 3;
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('student/student_list');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');

		//$data['query'] = $this->db->get('student');

	}

	private function student_testList_page($data)
	{
		$data['page'] = 9;
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('student/student_testList');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

	private function student_add_page($data)
	{
		$data['page'] = 10;
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('student/student_add');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

	private function student_edit_page($data)
	{
		$data['page'] = 11;
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('student/student_edit');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */