<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\Languages;

class BooksUserController extends Controller
{
    public function index()
    {
        //$books = Books::all();
        return view('layouts.galeria')->with('books',Books::all())->with('categories',Categories::all())->with('languages',Languages::all());
    }

    public function show($id)
    {
        $book = Books::find($id);
        $category = Categories::find($id);
        $language = Languages::find($id);

        return view('layouts.libros')->with('book',$book)->with('category',$category)->with('language',$language);
    }
}
