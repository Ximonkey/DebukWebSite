<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\Languages;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$books = Books::all();
        return view('admin.books.index')->with('books',Books::all())->with('categories',Categories::all())->with('languages',Languages::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.index')->with('books',Books::all())->with('categories',Categories::all())->with('languages',Languages::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooksRequest $request)
    {
        $books = new Books;
 
        $books->title = $request->title;
        $books->author = $request->author;
        $books->date = $request->date;
        $books->desc = $request->desc;
        if($request->hasFile('img')){
            $img=$request->file('img');
            $destino='libros/';
            $origen=$img->getClientOriginalName();

            $filename=pathinfo($origen,PATHINFO_FILENAME);
            $ext=pathinfo($origen,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename;
            $finalpath=$uniqname .'.'. $ext;
            $img->move($destino,$finalpath);
            
            $books->img = $finalpath;
        }
        $books->age = $request->age;
        $books->category_id = $request->category_id;
        $books->language_id = $request->language_id;
        $books->pag = $request->pag;
        $books->status = $request->status;
 
        $books->save();

        //echo "Registro realizado";
        return view('admin.books.index')->with('books',Books::all())->with('categories',Categories::all())->with('languages',Languages::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::find($id);
        return view('admin.books.show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::find($id);
        return view('admin.books.edit')->with('book',$book)->with('categories',Categories::all())->with('languages',Languages::all());
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksRequest  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBooksRequest $request, $id)
    {
        $book = Books::find($id);
 
        $book->title = $request->title;
        $book->author = $request->author;
        $book->date = $request->date;
        $book->desc = $request->desc;
        if($request->hasFile('img')){
            $img=$request->file('img');
            $destino='libros/';
            $origen=$img->getClientOriginalName();

            $filename=pathinfo($origen,PATHINFO_FILENAME);
            $ext=pathinfo($origen,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename;
            $finalpath=$uniqname .'.'. $ext;
            $img->move($destino,$finalpath);

            unlink('libros/'.$book->img);
            $book->img = $finalpath;
        }
        $book->age = $request->age;
        $book->category_id = $request->category_id;
        $book->language_id = $request->language_id;
        $book->pag = $request->pag;
        $book->status = $request->status;
 
        $book->save();

        //echo "Registro actualizado";
        //return redirect()->route('books.index');/*->with('books',Books::all())->with('categories',Categories::all())->with('languages',Languages::all());*/
        return redirect('books');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::find($id);
        unlink('libros/'.$book->img);
        $book->delete();

        //echo "registro borrado";
        return redirect('books');
    }
}
