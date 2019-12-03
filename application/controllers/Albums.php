<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//https://refactoring.guru/design-patterns/adapter/php/example
class Albums extends CI_Controller {
    
    public function index()
	{
		$data['title'] = 'Albums | Music Shop';
		$data['page'] = 'frontend/view_store';
		$data['css_array'] = array('store.css');
		$this->load->view('frontend/view_layout',$data);
	}
}
