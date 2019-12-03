<?php

class AlbumsAdapter{

    public function get_albums(){
        try{
            return $this->fetch('https://jsonplaceholder.typicode.com/albums');
        }
        catch(\Exception $e){
            throw new \Exception($e->getMessage());
			return null;            
        }
    }

    public function get_album($id){
        try{
           return $this->fetch("https://jsonplaceholder.typicode.com/albums?id={$id}");
        }
        catch(\Exception $e){
            throw new \Exception($e->getMessage());
			return null;
        }
    }

    private function fetch($url){
        if(!extension_loaded("curl")){
            $res_object = file_get_contents($url);
            return json_decode($res_object, true) ?? null;
        }
        try{
            $ch = curl_init($url);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$data = curl_exec($ch);
			$res_object = json_decode($data, true);
            curl_close($ch);
            return $res_object ?? null;
        }
        catch(\Exception $e){
            throw new \Exception($e->getMessage());
			return;
        }
    }
}
       