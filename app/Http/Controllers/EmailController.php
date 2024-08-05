<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $toEmail = 'm.abdullahrashid931@gmail.com';
        $message = 'Abdullah G';
        $subject = 'Ubaid subject 123';

        // Mail::to($toEmail)->send(new WelcomeEmail($message, $subject));
    }
}
