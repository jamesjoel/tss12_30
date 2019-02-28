<?php

class Home extends CI_Controller{


	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}


	function index()
	{
		// $this->load->helper("url");
		$this->load->view("homepage");
	}

	function about()
	{
		$a = "rohit";
		$b = "jaya";


		$data = array("red", "green", "blue");

		$arr = array("first" => $a, "second" => $b, "color"=>$data);
		$this->load->view("about", $arr);
	}
	function contact()
	{
		// $this->load->helper("url");
		$this->load->view("contact");
	}
	function help()
	{
		// $this->load->helper("url");
		$this->load->view("help");
	}


	function save()
	{
		print_r($this->input->post());
		$a = $this->input->post("f_name");
		echo $a;
		// $_POST['f_name']
	}

}


?>