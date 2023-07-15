<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\UpdateContactsRequest;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$contacts = Contacts::all();
        return view('admin.contacts.index')->with('contacts',Contacts::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.index')->with('contacts',Contacts::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactsRequest $request)
    {
        $contacts = new Contacts;
 
        $contacts->name = $request->name;
        $contacts->mail = $request->mail;
        $contacts->tel = $request->tel;
        $contacts->text = $request->text;
 
        $contacts->save();

        //echo "Registro realizado";
        //return view('layouts.contacto')->with('contacts',Contacts::all());
        return redirect()->back()->with('message', '¡Su mensaje fue enviado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contacts::find($id);
        return response(view('admin.contacts.show')->with('contact',$contact));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contacts::find($id);
        return response(view('admin.contacts.edit')->with('contact',$contact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactsRequest  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactsRequest $request, $id)
    {
        $contact = Contacts::find($id);
 
        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->tel = $request->tel;
        $contact->text = $request->text;
 
        $contact->save();

        //echo "Registro realizado";
        //return view('admin.contacts.index')->with('contacts',Contacts::all());
        return redirect('contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contacts::find($id);
 
        $contact->delete();

        //echo "registro borrado";
        //return view('admin.contacts.index')->with('contacts',Contacts::all());
        return redirect('contacts');
    }
}
