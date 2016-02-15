<?php
require(APPPATH.'libraries/REST_Controller.php');
 
class Welcome extends CI_Controller {
 
    function index()
    {
	  $this->load->helper('url');
      $this->load->view('welcome_message');
    }
    
}