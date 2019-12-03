<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//https://refactoring.guru/design-patterns/adapter/php/example
class Albums extends CI_Controller {
    
    public function index()
	{
		$data['title'] = 'Albums | Music Shop';
		$data['page'] = 'frontend/view_store';
		$data['css_array'] = array('store.css');
		$lib = $this->load->library('albumsAdapter');
		$data['albums'] = $this->albumsadapter->get_albums();
		$this->load->view('frontend/view_layout',$data);
	}

	public function view(){
		$id = (int) $this->uri->segment(4);
		if($id == 0){
			redirect(base_url());
		}
		$lib = $this->load->library('albumsAdapter');
		$data['albums'] = $this->albumsadapter->get_album($id);
		
		$data['title'] = 'Albums | Music Shop';
		$data['page'] = 'frontend/view_buy';
		$data['css_array'] = array('store.css');
		
		//$this->load->view('frontend/view_layout',$data);
	}
}
