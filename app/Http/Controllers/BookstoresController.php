<?php

namespace App\Http\Controllers;

use App\Models\Bookstores;
use App\Http\Requests\StoreBookstoresRequest;
use App\Http\Requests\UpdateBookstoresRequest;

class BookstoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bookstores = Bookstores::all();
        return view('admin.bookstores.index')->with('bookstores', Bookstores::all());  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bookstores.index')->with('bookstores', Bookstores::all()); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookstoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookstoresRequest $request)
    {
        $bookstores = new Bookstores;
 
        $bookstores->name = $request->name;
        if($request->hasFile('img')){
            $img=$request->file('img');
            $destino='bibliotecas/';
            $origen=$img->getClientOriginalName();

            $filename=pathinfo($origen,PATHINFO_FILENAME);
            $ext=pathinfo($origen,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename;
            $finalpath=$uniqname .'.'. $ext;
            $img->move($destino,$finalpath);
            
            $bookstores->img = $finalpath;
        }
        $bookstores->link = $request->link;
        $bookstores->status = $request->status;
 
        $bookstores->save();

        //echo "Registro realizado";
        return view('admin.bookstores.index')->with('bookstores', Bookstores::all()); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookstores  $bookstores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookstore = Bookstores::find($id);
        return response(view('admin.bookstores.show')->with('bookstore',$bookstore));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookstores  $bookstores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookstore = Bookstores::find($id);
        return response(view('admin.bookstores.edit')->with('bookstore',$bookstore));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookstoresRequest  $request
     * @param  \App\Models\Bookstores  $bookstores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookstoresRequest $request, $id)
    {
        $bookstore = Bookstores::find($id);
 
        $bookstore->name = $request->name;
        if($request->hasFile('img')){
            $img=$request->file('img');
            $destino='bibliotecas/';
            $origen=$img->getClientOriginalName();

            $filename=pathinfo($origen,PATHINFO_FILENAME);
            $ext=pathinfo($origen,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename;
            $finalpath=$uniqname .'.'. $ext;
            $img->move($destino,$finalpath);

            unlink('bibliotecas/'.$bookstore->img);
            $bookstore->img = $finalpath;
        }
        $bookstore->link = $request->link;
        $bookstore->status = $request->status;
 
        $bookstore->save();

        //echo "Registro realizado";
        //return view('admin.bookstores.index')->with('bookstores', Bookstores::all()); 
        return redirect('bookstores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookstores  $bookstores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookstore = Bookstores::find($id);
        unlink('bibliotecas/'.$bookstore->img);
        $bookstore->delete();

        //echo "registro borrado";
        //return view('admin.bookstores.index')->with('bookstores', Bookstores::all()); 
        return redirect('bookstores');
    }
}
