<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {

    private $stripe_api_key = 'sk_test_cLHqRfAOuHVxD65avzGvsjZQ00b468oTj9';
    
    public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function pay(){
        $id = $this->uri->segment(3);
        if (empty($_POST["stripeToken"])){
            die("<h1>Payment authorisation error</h1>");
        }
        $this->load->library('StripeAdapter');
        $this->load->library('albumsAdapter');
        $data['album'] = $this->albumsadapter->get_album($id)[0];
        $payments_array = array(
            "amount" => ($data['album']['id'] * 100), // convert to dollars from cents
            "currency" => "usd",
            'description' => 'Album purchase',
            'source' => $_POST["stripeToken"],  
        );
        $this->stripeadapter->set_api_key($this->stripe_api_key);
        $this->load->model('M_Payment', 'payments');
        $pay_params = array(
            'user_id' => $this->session->userdata('userId') ?? 0,
            'amount' => $data['album']['id'],
            'album_id' => $data['album']['id'],
            'remarks' => 'Album purchase',
             
        );
        try{

        }
        catch(Exception $e){
            $data['error'] = true;
            $data['message'] =  $e->getMessage();
        }
        
    }
}
