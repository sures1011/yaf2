<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function show(){
        return view('admin.contact');
    }
    public function send(){
        $data = request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:5'
        ]);
        Mail::to('apex.arish@gmail.com')->send(new ContactFormMail($data));

        // dd('sent');
        return redirect()->back()->with('success','Message sent successfully');
    }
}
