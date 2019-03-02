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
	function select_by_username($a)
	{
		// echo $a;
		// die;
		$this->db->where("username", $a);
		$result = $this->db->get("user_ci");
		
		return $result;
	}

}


?>