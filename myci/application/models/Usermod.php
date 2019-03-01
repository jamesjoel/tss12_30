<?php
class Usermod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insert($arr)
	{
		$this->db->insert("user_ci", $arr);
		
	}

}


?>