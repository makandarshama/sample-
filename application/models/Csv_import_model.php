<?php
class Csv_import_model extends CI_Model
{
 function select()
 {
  $this->db->order_by('user_id', 'DESC');
  $query = $this->db->get('my_users');
  return $query;
 }

 function insert($data)
 {
 	echo "string";
 $this->db->insert('my_users', $data);
 
 }
 function fetch(){
 	$sql="select * from my_users";
 }
}