<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function contactUs()
    {
        return view('contactUs');
    }

    public function sendMail(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string',
            'phone'=>'required',
            'message'=>'required',
        ]);
        $data['subject'] = 'Contact us';
        Mail::to( 'samar@example.com')->send( 
            new ContactMail($data)
        );
        return "mail sent!";
    }
}
