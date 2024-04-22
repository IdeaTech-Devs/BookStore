<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    //edit
    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('editgenre', compact('genre'));
    }

    //update
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        $genre->update($request->all());
        return redirect('/insertgenre')->with('success', 'update genre');
    }
}
