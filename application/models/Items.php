<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Items extends CI_Model
{
    public function __construct()
	{
        parent::__construct();

		$this->load->database();
	}

    public function getItems()
    {
        return $this->db->get("items")->result();
    }

    public function getItem($id)
    {
        $result = $this->db->get_where("items", array("id" => $id));

        return $result->num_rows() == 0 ? NULL : $result->row();
    }

    public function getImages($item_id)
    {
        return $this->db->get_where("item_images", array("item" => $item_id))->result();
    }

    public function createItem($name, $description, $images)
    {
        $this->db->insert("items", array("name" => $name, "description" => $description));

        $id = $this->db->insert_id();

        foreach($images as $image)
        {
            $this->db->insert("item_images", array("item" => $id, "path" => $image));
        }

        return $id;
    }
}

?>