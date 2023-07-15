<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use App\Models\Books;
use App\Http\Requests\StoreCharactersRequest;
use App\Http\Requests\UpdateCharactersRequest;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$characters = Characters::all();
        return view('admin.characters.index')->with('characters',Characters::all())->with('books',Books::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.characters.index')->with('characters',Characters::all())->with('books',Books::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharactersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharactersRequest $request)
    {
        $characters = new Characters;
 
        $characters->name = $request->name;
        $characters->desc = $request->desc;
        $characters->icolor = $request->icolor;
        $characters->iperson = $request->iperson;
        $characters->iobj = $request->iobj;
        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            $destino='personajes/';
            $origen=$photo->getClientOriginalName();

            $filename=pathinfo($origen,PATHINFO_FILENAME);
            $ext=pathinfo($origen,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename;
            $finalpath=$uniqname .'.'. $ext;
            $photo->move($destino,$finalpath);
            $characters->photo = $finalpath;
        }
        if($request->hasFile('photo2')){
            $photo2=$request->file('photo2');
            $destino='personajes/';
            $origen2=$photo2->getClientOriginalName();

            $filename2=pathinfo($origen2,PATHINFO_FILENAME);
            $ext2=pathinfo($origen2,PATHINFO_EXTENSION);

            $uniqname2 = uniqid().'-'.$filename2;
            $finalpath2=$uniqname2 .'.'. $ext2;
            $photo2->move($destino,$finalpath2);
            $characters->photo2 = $finalpath2;
        }
        if($request->hasFile('photo3')){
            $photo3=$request->file('photo3');
            $destino='personajes/';
            $origen3=$photo3->getClientOriginalName();

            $filename3=pathinfo($origen3,PATHINFO_FILENAME);
            $ext3=pathinfo($origen3,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename3;
            $finalpath3=$uniqname .'.'. $ext3;
            $photo3->move($destino,$finalpath3);
            $characters->photo3 = $finalpath3;
        }
        $characters->model = $request->model;
        $characters->book_id = $request->book_id;
        $characters->status = $request->status;
 
        $characters->save();

        //echo "Registro realizado";
        return view('admin.characters.index')->with('characters',Characters::all())->with('books',Books::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = characters::find($id);
        return view('admin.characters.show')->with('character',$character);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Characters::find($id);
        return view('admin.characters.edit')->with('character',$character)->with('books',Books::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharactersRequest  $request
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharactersRequest $request, $id)
    {
        $character = Characters::find($id);
 
        $character->name = $request->name;
        $character->desc = $request->desc;
        $character->icolor = $request->icolor;
        $character->iperson = $request->iperson;
        $character->iobj = $request->iobj;
        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            $destino='personajes/';
            $origen=$photo->getClientOriginalName();

            $filename=pathinfo($origen,PATHINFO_FILENAME);
            $ext=pathinfo($origen,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename;
            $finalpath=$uniqname .'.'. $ext;
            $photo->move($destino,$finalpath);

            unlink('personajes/'.$character->photo);
            
            $character->photo = $finalpath;
        }
        if($request->hasFile('photo2')){
            $photo2=$request->file('photo2');
            $destino='personajes/';
            $origen2=$photo2->getClientOriginalName();

            $filename2=pathinfo($origen2,PATHINFO_FILENAME);
            $ext2=pathinfo($origen2,PATHINFO_EXTENSION);

            $uniqname2 = uniqid().'-'.$filename2;
            $finalpath2=$uniqname2 .'.'. $ext2;
            $photo2->move($destino,$finalpath2);

            unlink('personajes/'.$character->photo2);

            $character->photo2 = $finalpath2;
        }
        if($request->hasFile('photo3')){
            $photo3=$request->file('photo3');
            $destino='personajes/';
            $origen3=$photo3->getClientOriginalName();

            $filename3=pathinfo($origen3,PATHINFO_FILENAME);
            $ext3=pathinfo($origen3,PATHINFO_EXTENSION);

            $uniqname = uniqid().'-'.$filename3;
            $finalpath3=$uniqname .'.'. $ext3;
            $photo3->move($destino,$finalpath3);

            unlink('personajes/'.$character->photo3);
            
            $character->photo3 = $finalpath3;
        }
        $character->model = $request->model;
        $character->book_id = $request->book_id;
        $character->status = $request->status;
 
        $character->save();

        //echo "registro actualizado";
        return redirect('characters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $character = Characters::find($id);
        unlink('personajes/'.$character->photo);
        unlink('personajes/'.$character->photo2);
        unlink('personajes/'.$character->photo3);
        $character->delete();

        //echo "registro borrado";
        return redirect('characters');
    }
}
