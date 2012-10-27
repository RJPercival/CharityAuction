<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once("PageController.php");

class ItemsController extends PageController
{
    public function __construct()
    {
        parent::__construct();

		$this->load->model('items');
        $this->load->model('bids');
    }

	public function viewAll()
	{
        $data["items"] = $this->items->getItems();

        parent::view("items", $data);
	}

    public function view($id)
    {
        $data["item"] = $this->items->getItem($id);

        if($data["item"] == NULL)
        {
            show_404();
        }
        else
        {
            $data["images"] = $this->items->getImages($id);
            $data["highestBid"] = $this->bids->GetHighestBid($id);
            $data["bidCount"] = $this->bids->GetBidCount($id);

            parent::view("item", $data);
        }
    }
}
