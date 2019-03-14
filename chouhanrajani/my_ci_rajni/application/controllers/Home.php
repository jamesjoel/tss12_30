<?php
class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");

	}
	function index()
	{
		$this->load->view("homepage");

	}
	// function image_upload()
	// {
	// 	$this->load->library("upload" ,$config);
	// 	$config["upload_path"]="user/";
	// 	$config["max_size"]=1024;
	// 	$config["allowed_type"]="jpeg|png|gif|jpg";
	// 	$config["encrypt_name"]=true;

	// }
	function sign()
	{
     $this->load->view("sign");
	}
	function save_sign()
	{
		// print_r($_FILES);
		$config["upload_path"]="image/";
		$config["max_size"]=1024;
		$config["allowed_types"]="jpeg|png|gif|jpg";
		$config["encrypt_name"]=true;
		$this->load->library("upload", $config);

		if($this->upload->do_upload()==false)
		{
			
			$a = $this->upload->display_errors();
		}
	else{
	$data['fullname']=$this->input->post("fullname");
	$data['username']=$this->input->post("username");
	$data['password']=$this->input->post("pass");
	$data['address']=$this->input->post("add");
	$data['city']=$this->input->post("city");
	$data['hobby']=$this->input->post("hobby");
	$data['gender']=$this->input->post("gender");
	$data['contact']=$this->input->post("contact");
	$data['pincode']=$this->input->post("pincode");
	$data['image']=$this->upload->data("file_name");
	// print_r($data);die;
	// echo $this->upload->display_errors();
		$this->load->model("usermod");
		$this->usermod->insert($data);
		}
		
	}
	
}
?>