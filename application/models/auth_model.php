<?php
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class auth_model extends CI_Model
{
	
	
	public function create($formArray)
	{
		$this->db->insert('my_users',$formArray);
	}

	  public function register($full_name, $email,$password)
    {
        $data = array(
            'full_name' => $full_name,
            'email' => $email,
            'password' => md5($password),
            
            
        );

        return $this->db->insert('my_users', $data);
    }

}
?>