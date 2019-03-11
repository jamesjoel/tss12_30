<?php

class Home extends CI_Controller{


	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
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
			$this->usermod->insert($data);
			redirect("home/login");
		}
	}

	function login()
	{
		$pagedata = array("pagename"=>"login", "title"=>"Login Page", "demo" =>"Login Page");
		$this->load->view("layout", $pagedata);
	}


	function auth()
	{
		$u = $this->input->post("username");
		$p = $this->input->post("pass");

		$this->load->model("usermod");
		$res=$this->usermod->select_by_username($u);
		if($res->num_rows()==1)
		{
			$data = $res->row_array();
			// $data=mysqli_fetch_assoc($res)
			if($data['password']==$p)
			{
				if($data['status']==1)
				{
					//$_SESSION['id']=$data['id'];
					$this->session->set_userdata("id", $data['id']);
					$this->session->set_userdata("name", $data['full_name']);
					$this->session->set_userdata("is_user_logged_in", true);
					
						redirect("user");

				}
				else
				{
					$this->session->set_flashdata("msg", "You are deactive now");
						redirect("home/login");		
				}
			}
			else
			{
				$this->session->set_flashdata("msg", "Invalid Password");
				redirect("home/login");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Username And Password Not Exists !");
			redirect("home/login");

		}

	}

	
}


?>