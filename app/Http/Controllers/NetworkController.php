<?php

namespace App\Http\Controllers;
use App\Mail\Notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class NetworkController extends Controller
{
    public function Network(){
     Mail::to("user@gmail.com")->send(new Notify());
     return view('emails.network');
    
    }
}
