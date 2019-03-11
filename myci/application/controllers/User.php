<?php

class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->backdoor();
		$this->load->model("usermod");
	}

	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home");
		}
	}
	function index()
	{
		$pagedata = array("pagename"=>"user/my_account", "title"=>"My Account", "demo" =>"Login Page");
		$this->load->view("layout", $pagedata);
	}
	function profile()
	{
		// $id = $_SESSION['id']
		$x=$this->session->userdata("id");
		
		$res=$this->usermod->select_by_id($x);

		$pagedata["pagename"]="user/profile";
		$pagedata["title"]="User Profile";
		$pagedata["demo"]="";
		$pagedata["data"]=$res;

		// $pagedata = array("pagename"=>"user/profile", "title"=>"My Profile", "demo" =>"Login Page", "data"=>$res);
		$this->load->view("layout", $pagedata);
	}


	function edit_profile()
	{
		$x=$this->session->userdata("id");
		// $this->load->model("usermod");
		$res=$this->usermod->select_by_id($x);
		$pagedata["pagename"]="user/edit_profile";
		$pagedata["title"]="User Profile";
		$pagedata["demo"]="";
		$pagedata["data"]=$res;
		$this->load->view("layout", $pagedata);
	}
	function update()
	{
		$data['full_name']=$this->input->post("full_name");
		$data['address']=$this->input->post("add");
		$data['contact']=$this->input->post("contact");
		$data['city']=$this->input->post("city");
		$data['gender']=$this->input->post("gender");
		$id = $this->session->userdata("id");
		
		$this->usermod->update($id, $data);

		$this->session->set_flashdata("msg", "Profile Updated Successfuly");

		redirect("user/profile");

	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
}

?>