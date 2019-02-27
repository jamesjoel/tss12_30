<?php

class Home extends CI_Controller{


	function index()
	{
		// $this->about();
		$this->load->view("homepage");
	}

	function about()
	{
		$this->load->view("about");
	}

}


?>