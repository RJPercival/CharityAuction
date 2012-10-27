<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PageController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

	public function view($page, $data = array())
	{
        if(file_exists("application/views/$page.php") == false)
	    {
		    show_404();
	    }

        $data["title"] = ucfirst($page);

        $this->load->view("templates/header", $data);
		$this->load->view($page, $data);
        $this->load->view("templates/footer", $data);
	}
}
