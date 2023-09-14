<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Redirect;

class SendEmailController extends Controller
{
    public function send()
    {
        $data = request()->validate([
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required',
            'company' => 'required',
            'knowledge' => 'required',
            'reason' => 'required',
            'subject' => 'required',
            'phone' => 'string'
        ]);
        
        Mail::to('contact@cyje.fr')->send(new SendMail($data));
    }
}
