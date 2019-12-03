<?php 
class M_Payment extends CI_Model{
    private $table = 'd_admin';
    public  $unique_key = 0;

    public function add_payment($params){
    	$this->db->insert($this->table ,$params);
		$this->unique_key = $this->db->insert_id();
		return $this->unique_key > 0 ? true :false;
    } 


}