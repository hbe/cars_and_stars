<?php 
//////check login
	if (!$this->session->userdata('login_state')) 
		{
      		header("Location:/login");    // no session established, kick back to login page
    	}
?>
