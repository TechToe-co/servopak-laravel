<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\ClientContact;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'telephone' => 'required|digits:11',
            'message' => 'required|string|min:3|max:5000',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->input('name');
        $phone_number = $request->input('telephone');
        $message = $request->input('message');
        $subject = 'Concerns';
        $client = session('active_client');
        $contact = ClientContact::where('client_id', $client->id)->first();
        Mail::to($contact->email)->send(new WelcomeEmail($message, $subject, $phone_number, $name));
        return redirect(url('/contact'));
    }
}
