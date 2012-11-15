<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marking_system extends CI_Controller {

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
		$this->new_test_page(NULL);
	}

	public function test_list()
	{
		$this->testGroupList_page(NULL);
	}

	public function test_wizard()
	{
		$this->test_wizard_page(NULL);
	}

	private function new_test_page($data)
	{
		$data['page'] = 2;
		$data['books'] = $this->getAllBooks();
		$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('test/new_test');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

	public function test()
	{
		$bookTemp = (isset($_POST['book']))? $_POST['book'] : FALSE;

		if(!$bookTemp)
		{
			$data['empty'] = "please enter the book that you choose";
			$this->new_test_page($data);
		}
		else
		{
			$data = $this->book_processor($this->getBook($bookTemp));
			$data['total_section_of_question'] = $data['total_answer']/$data['total_question_type'];
			$this->test_page($data);
		}
		
	}

	public function test_result()
	{	

		$answer = $this->book_processor($this->getBook($_POST['book']));

		$b = 1;
		$correct_answer = 0;
		$stud_answer = "";
		foreach($answer['answer'] as $result)
		{
			$check_answer[$b] = $result;
			$b++;
		}
		for($a=1; $a<=$answer['total_answer']; $a++)
		{
			$b = $a-1;
			if($a != $answer['total_answer'])
			{
				$student_answers[$b] = $_POST[$a];
				$stud_answer .= $_POST[$a] . ","; 
			}
			else
			{
				$student_answers[$b] = $_POST[$a];
				$stud_answer .= $_POST[$a];
			}

			if($check_answer[$a] == $_POST[$a])
				$correct_answer++;
		}

		$total_mark = ($correct_answer/$answer['total_answer'])*100;

		$this->setStudentAnswer("123", $stud_answer, $total_mark);

		//this is the student answers that has been submited

		$data = $this->book_processor($this->getBook($_POST['book']));
		$data['total_section_of_question'] = $data['total_answer']/$data['total_question_type'];
		$data['student_answers'] = $student_answers;
		
		$this->test_result_page($data);
	}

	private function book_processor($data)
	{
		foreach($data as $val)
		{
			$result['answer'] = explode(",", $val->answer);
			$result['total_answer'] = count($result['answer']);
			$result['question_type'] = explode(",", $val->type);
			$result['total_question_type'] = count($result['question_type']);
			$result['option'] = explode(",", $val->option);
			$result['total_option'] = count($result['option']);
			$result['book'] = $val->book;
		}

		return $result;
	}

	private function test_page($data)
	{
		$data['page'] = 2;
    	$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('test/test_page');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

	private function test_result_page($data)
	{
		$data['page'] = 2;
    	$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('test/test_result');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}


	private function getAllBooks()
	{
		$this->load->model('Test_model');

		return $this->Test_model->getAllBooks();
	}

	private function getBook($book)
	{
		$this->load->model('Test_model');

		return $this->Test_model->getBook($book);
	}

	private function setStudentAnswer($stud_id, $answer, $mark)
	{
		$this->load->model('Test_model');

		$today = date("d/m/y");

		$this->Test_model->setStudentAnswer($stud_id, $answer, $mark, $today);
	}

	private function testGroupList_page() {
		$data['page'] = 13;
    	$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('test/test_list');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

	private function test_wizard_page() {
		$data['page'] = 14;
    	$this->load->view('includes/loginChecker');
		$this->load->view('includes/header');
		$this->load->view('includes/template_top', $data);
		$this->load->view('test/test_wizard');
		$this->load->view('includes/template_bottom');
		$this->load->view('includes/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */