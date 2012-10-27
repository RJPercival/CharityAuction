<?php

if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Users extends CI_Model 
{
    public function __construct()
	{
        parent::__construct();

		$this->load->database();
	}

    public function getUser($emailAddress)
    {
        $result = $this->db->get_where("users", array("email" => $emailAddress));
        
        return empty($result) ? NULL : $result->row();
    }

    public function createUser($emailAddress)
    {
        $this->db->insert("users", array("email" => $emailAddress));

        return $this->db->insert_id();
    }
}

?>