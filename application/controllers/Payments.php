<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function pay(){
        if (empty($_POST["token"])){
            print_r($_POST);
        }
    }
}
