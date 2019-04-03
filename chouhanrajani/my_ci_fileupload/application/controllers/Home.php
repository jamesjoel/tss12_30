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
	function sign()
	{
		$this->load->view("sign");
	}
}
?>