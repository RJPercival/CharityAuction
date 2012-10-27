
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bids extends CI_Model
{
    public function __construct()
	{
        parent::__construct();

		$this->load->database();
	}

    public function getBids($item_id)
    {
        return $this->db->get_where("bids", array("item" => $item_id))->result();
    }

    public function getHighestBid($item_id)
    {
        $result = $this->db->select_max("amount")->get_where("bids", array("item" => $item_id))->row()->amount;

        return $result ?: 0;
    }

    public function getBidCount($item_id)
    {
        return $this->db->from("bids")->where("item", $item_id)->count_all_results();
    }
}

?>