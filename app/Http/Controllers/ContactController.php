<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function submitForm(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Send the email
    $data = $request->all();
    Mail::to('thindwachisomo20@gmail.com')->send(new ContactFormMail($data));

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Message sent successfully!');
}
}