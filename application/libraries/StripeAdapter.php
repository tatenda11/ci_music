<?php
class StripeAdapter{

    private $api_key;
   
    public function __construct($api_key = ''){
        $this->api_key = $api_key;
    }

   public function create_payment($items_array){
       if($this->api_key == ''){
            throw new \Exception('Api key invalide');
            return;
       }
       \Stripe\Stripe::setApiKey($this->api_key);
       return Stripe\Charge::create([$items_array]);
   }

   public function set_api_key($key){
      $this->api_key = $key;
   }

}