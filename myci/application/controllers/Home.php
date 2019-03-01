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
		$this->form_validation->set_rules("username", "Username", "required|valid_email");
		$this->form_validation->set_rules("pass", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[pass]");
		$this->form_validation->set_rules("add", "Address", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");

		if($this->form_validation->run()==false)
		{
			$pagedata = array("pagename"=>"signup", "title"=>"Registration", "demo" =>"Bhopal");
			$this->load->view("layout", $pagedata);
		}
		else
		{
			$data['full_name']=$this->input->post("full_name");
			$data['username']=$this->input->post("username");
			$data['password']=$this->input->post("pass");
			$data['address']=$this->input->post("add");
			$data['city']=$this->input->post("city");
			$data['gender']=$this->input->post("gender");
			$data['contact']=$this->input->post("contact");

			$this->load->model("usermod");
			// Usermod ------ insert() call
			$this->usermod->insert($data);
			redirect("home/login");
		}
	}

	function login()
	{
		$pagedata = array("pagename"=>"login", "title"=>"Login Page", "demo" =>"Login Page");
		$this->load->view("layout", $pagedata);
	}

	
}


?>