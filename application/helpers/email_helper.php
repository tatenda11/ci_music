<?php

if(!function_exists('app_email_sender')){
   
    function app_email_sender($message, $to, $subject, $grt_text)
    {
        $obj =& get_instance();
        $obj->load->library('email');
        $config=array(
            'charset'=>'utf-8',
            'wordwrap'=> TRUE,
            'mailtype' => 'html',
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'stmpuser',
            'smtp_pass' => 'tsmtmpass',
            'smtp_port' => 465
        );
        $obj->email->initialize($config);
        $obj->email->from('sale@coolmusic.com', 'Music Store ');
        $obj->email->to($to);
        $obj->email->subject($subject);
        $data['message'] = $message;
        $data['greeting_text'] = $grt_text ?? '';
        $mesg = $obj->load->view('templates/view_email',$data,true);
        $obj->email->message($mesg);
        @$mail = $obj->email->send();

    }
}
