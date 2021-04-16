<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo -> demo_one = 'Demo one value';
        $objDemo -> demo_two = 'Demo Two value';
        $objDemo -> sender = 'DYKEN';
        $objDemo -> receiver = 'Akyl Temirgaliyev';

        Mail::to("temirgaliev2104@gmail.com")->send(new DemoEmail($objDemo));
    }
}
