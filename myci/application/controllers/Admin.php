<?php

class Admin extends CI_Controller{


	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}

	function backdoor()
	{
		if(! $this->session->userdata("is_admin_logged_in"))
		{
			redirect("home");
		}
	}
	function index()
	{
		$this->load->view("admin_pages/login");
	}
	function auth()
	{
		$u = $this->input->post("username");
		$p = $this->input->post("pass");
		$this->load->model("adminmod");
		$res=$this->adminmod->select_by_username($u);
		if($res->num_rows()==1)
		{
			$data=$res->row_array();
			if($data['password']==md5($p))
			{
				$this->session->set_userdata("is_admin_logged_in", true);
				redirect("admin/dashboard");
			}
			else
			{
				$this->session->set_flashdata("msg", "Invalid Password");
				redirect("admin");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "Invalid Username and Password");
			redirect("admin");
		}
	}


	function dashboard()
	{
		$this->backdoor();
		$this->load->view("admin_pages/dash");
	}
	function user()
	{
		$this->load->model("usermod");
		$res=$this->usermod->get_all();
		$pagedata["data"]=$res;
		$this->load->view("admin_pages/user_list", $pagedata);
	}
	function logout()
	{
		$this->backdoor();
		$this->session->sess_destroy();
		redirect("home");

	}
}

?>