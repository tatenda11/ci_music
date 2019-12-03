<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//https://refactoring.guru/design-patterns/adapter/php/example
class Albums extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(empty( $this->session->userdata('userId'))){
			$session_data = array(
				'userId' => 21,
				'email'  => 'user@fakeemail.com',
				'name'   => 'Johm Doe' 
			);
			$this->session->set_userdata($session_data);
		}
	}

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
		$id = (int) $this->uri->segment(3);
		if($id == 0){
			redirect(base_url());
		}
		$this->load->library('albumsAdapter');
		$data['album'] = $this->albumsadapter->get_album($id)[0];
		$data['title'] = 'Albums | Music Shop';
		$data['page'] = 'frontend/view_view_album';
		$data['css_array'] = array('view_album.css');
		//$data['js_array'] = array('client.js');
		//print_r($data['album'] );die();
		$this->load->view('frontend/view_layout',$data);
	}
}
