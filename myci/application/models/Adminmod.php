<?php
class Adminmod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// function insert($arr)
	// {
	// 	$this->db->insert("user_ci", $arr);
		
	// }
	function select_by_username($a)
	{
		// echo $a;
		// die;
		$this->db->where("username", $a);
		$result = $this->db->get("admin");
		// SELECT * FROM user_ci WHERE username='$a'
		
		return $result;
	}

	function select_by_id($a)
	{
		$this->db->where("id", $a);
		$result = $this->db->get("user_ci");
		// SELECT * FROM user_ci WHERE id = $a
		return $result;
	}


	function update($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("user_ci", $data);
	}
}
?>