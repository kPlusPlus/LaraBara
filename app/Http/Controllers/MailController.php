<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    public function basic_email(){
        $data = array('name'=>"kresimir ivkovic");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('kresimir.ivkovic@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
            $message->from('kresimir.ivkovic@gmail.com','kresimir ivkovic');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email(){
        $data = array('name'=>"kresimir ivkovic");
        Mail::send('mail', $data, function($message) {
            $message->to('kresimir.ivkovic@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
            $message->from('kresimir.ivkovic@gmail.com','kresimir ivkovic');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

    public function attachment_email(){
        $data = array('name'=>"kresimir ivkovic");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('kresimir.ivkovic@gmail.com','kresimir ivkovic');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
