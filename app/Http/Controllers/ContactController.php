<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{

    public function submitForm(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|regex:/^[\pL\s]+$/u',
            'telephone' => 'required|digits:11',
            'message' => 'required|string|min:3|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->input('name');
        $telephone = $request->input('telephone');
        $message = $request->input('message');

        return redirect()->route('send-mail', [
            'name' => $name,
            'telephone' => $telephone,
            'message' => $message,
        ]);

        
    }
}
