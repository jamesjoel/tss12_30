<?php

class Home extends CI_Controller{


	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}


	function index()
	{
		$pagedata = array("pagename"=>"homepage", "title"=>"Home Page", "demo" =>"Special Offer");
		$this->load->view("layout", $pagedata);
	}
	function about()
	{
		$pagedata = array("pagename"=>"about", "title"=>"About Page", "demo" =>"Indore");
		$this->load->view("layout", $pagedata);
	}
	function contact()
	{
		$pagedata = array("pagename"=>"contact", "title" =>"Contact Page", "demo" =>"Ujjain");
		$this->load->view("layout", $pagedata);
	}
	function help()
	{
		$pagedata = array("pagename"=>"help", "title"=>"Help Page", "a"=>"rohit", "demo" =>"Mumbai");
		$this->load->view("layout", $pagedata);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username", "required");
		$this->form_validation->set_rules("pass", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required");
		$this->form_validation->set_rules("add", "Address", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("contact", "Contact", "required");

		if($this->form_validation->run()==false)
		{
			$pagedata = array("pagename"=>"signup", "title"=>"Registration", "demo" =>"Bhopal");
			$this->load->view("layout", $pagedata);
		}
		else
		{
			echo 'yes';
		}
	}

	
}


?>