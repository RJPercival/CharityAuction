<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class BidController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

		$this->load->model('bids');
    }

	public function getBids($item_id)
	{

	}
}
