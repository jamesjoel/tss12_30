<?php
class Usermod extends CI_Model {
   
   function __construct()
   {
   	parent::__construct();
   	$this->load->database();
   	
   }
   function insert($data)
   {
   	$this->db->insert("user", $data);
   }
}
?>