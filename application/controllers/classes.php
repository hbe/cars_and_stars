<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classes extends CI_Controller {

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
		$this->class_list(NULL);
	}

	private function class_list($data)
	{
		$data['page'] = 12;
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('classes/class_list');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

/*


	public function class_add()
	{
		$this->class_add_page(NULL);
	}

	public function class_edit()
	{
		$this->class_edit_page(NULL);
	}

	private function class_add_page($data)
	{
		$data['page'] = 10;
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('class/class_add');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

	private function class_edit_page($data)
	{
		$data['page'] = 11;
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('class/class_edit');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}


*/

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */