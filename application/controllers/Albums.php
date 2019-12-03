<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//https://refactoring.guru/design-patterns/adapter/php/example
class Albums extends CI_Controller {
    
    public function index()
	{
		$this->load->view('frontend/view_layout');
	}
}
