<?php 

if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class StaticPageController extends CI_Controller 
{
	public function view($page)
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
