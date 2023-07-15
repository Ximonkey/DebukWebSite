<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsUserController extends Controller
{
    public function store(Contacts $request)
    {
        $contacts = new Contacts;
 
        $contacts->name = $request->name;
        $contacts->mail = $request->mail;
        $contacts->tel = $request->tel;
        $contacts->text = $request->text;
 
        $contacts->save();

        //echo "Registro realizado";
        return view('layouts.contacto')->with('contacts',Contacts::all());
    }
}
