<?php
class excel_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('user_id','DESC');
		$sql=$this->db->get('my_users');
		return $sql;
	}

	function insert()
	{
		//$this->db->insert('user_id','DESC');
		$sql=$this->db->insert('my_users',$data);
		//return $sql;
	}

}


?>