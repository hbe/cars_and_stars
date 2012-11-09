<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Test_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllBooks()
    {
    	$this->db->select('book');
    	$query = $this->db->get('question_answer');
    	return $query->result();
    }

    public function getBook($book)
    {
    	$query = $this->db->get_where('question_answer', array('book' => $book));
    	return $query->result();
    }

    public function setStudentAnswer($stud_id, $answer, $mark, $today)
    {
    	$data = array(
		   'stud_id' => $stud_id,
		   'answer' => $answer,
		   'mark' => $mark,
		   'date' => $today
		);
		$this->db->insert('student_answer', $data); 
    }
}
?>