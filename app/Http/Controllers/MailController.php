<?php

namespace App\Http\Controllers;

use App\Mail\RegisterationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($reciever)
    {
        Mail::to($reciever)->send(new RegisterationMail);
    }
}
