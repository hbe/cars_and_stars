<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_login($user, $password)
    {
    	$query = $this->db->get_where('login', array('username' => $user, 'password' => $password));
    	return $query->result();
    }
}
?>