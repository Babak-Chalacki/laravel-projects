<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   function index(){
    $contacts = Contact::all();

    return view('welcome',[
        "contacts" => $contacts
    ]);
}

function add(Request $request){


    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'HomeNumber' => 'required|numeric',
    ]);

    $contact = new Contact();
    $contact->name = $request["name"];
    $contact->email = $request["email"];
    $contact->HomeNumber = $request["HomeNumber"];
    $contact->save();

    return redirect()->route('home');
}

function remove(){
    Contact::truncate();

    return redirect()->route('home');
}

}
