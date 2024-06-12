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


    $contact = new Contact();
    $contact->name = $request["name"];
    $contact->email = $request["email"];
    // $contact->number = $request["number"];
    $contact->HomeNumber = $request["HomeNumber"];
    $contact->save();


    $contacts = Contact::all();

    return view('welcome',[
        "contacts" => $contacts
    ]);
}
    function remove(){
        Contact::truncate();

        $contacts = Contact::all();

        return view('welcome',[
            "contacts" => $contacts
        ]);
    }

}