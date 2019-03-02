<?php
Class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	function index()
	{
		$this->load->view("homepage");

	}
	function about()
	{
		$this->load->view("about");
	}
	function contact()
	{
		$this->load->view("contact");
	}
	function help(){
		$this->load->view("help");
	}
	function sign(){
		$this->load->view("sign");
	}
}
?>