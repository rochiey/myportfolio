<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class DefaultController extends Controller
{
    

    public function sendMail(Request $request)
    {
    	$data = $request->all();

    	Mail::to('dev@rochieyamit.com')->send(new SendMailable($data));

    	$request->session()->flash('msg','Email Sent Successfully!');

    	return redirect()->back();
    }
}
