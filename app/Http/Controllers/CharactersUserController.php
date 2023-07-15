<?php

namespace App\Http\Controllers;
use App\Models\Characters;
use App\Models\Books;

class CharactersUserController extends Controller
{
    public function index()
    {
        //$characters = Characters::all();
        return view('layouts.personajes')->with('characters',Characters::all())->with('books',Books::all());
    }

    public function show($id)
    {
        $character = Characters::find($id);
        $book = Books::find($id);
        return view('layouts.personajes')->with('character',$character)->with('book',$book);
    }
}
