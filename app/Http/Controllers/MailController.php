<?php

namespace App\Http\Controllers;

use App\Mail\PortfolioMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public  static function sendEmail($request)
    {

        $details = [
            'name'=> $request['fullName'],
            'email' =>$request['email'],
            'message'=>$request['message'],
        ];
        
        Mail::to('abanoubtalaat111@gmail.com')->send(new PortfolioMail($details));
        return 'email is  send';
    }
}
