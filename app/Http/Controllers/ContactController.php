<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        Mail::to('nicolas.braillonpro@gmail.com')->send(new ContactMail($request->validated()));
  
        return redirect()->back()
                         ->with(['success' => 'Merci de nous contacter. Nous vous contacterons sous peu.']);
    }
}
