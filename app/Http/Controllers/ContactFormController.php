<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create(){
        return view('pages.contactus');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'company_name' => 'required'
        ]);
        $contactEmailInput = [
            $request->message,
            $request->name,
            $request->company_name,
        ];
        Mail::send('emails.contact', [
            'input' => $contactEmailInput
        ], function ($mail) use($request) {
            $mail->from($request->email, $request->name);
            $mail->to('ali@mrgamification.com')->subject('New Job Offer');
        });

        return redirect()->back()->with('success', 'Thank you for your message! We\'ll contact you shortly');
    }
}
