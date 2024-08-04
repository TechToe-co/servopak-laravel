<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $toEmail = 'hiraw3178@gmail.com';
        $message = 'Ubaid message';
        $subject = 'Ubaid subject';

        Mail::to($toEmail)->send(new WelcomeEmail($message, $subject));
    }
}
