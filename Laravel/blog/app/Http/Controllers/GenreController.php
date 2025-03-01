<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $data = Genre::all();
        
        return view('genre.index',compact('data'));
    }

    public function create(){
        return view('genre.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'string',
        ]);

        $genre = new Genre();
        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();

        return redirect()->route('genre');
    }

    public function show($id){
        $data = Genre::findOrFail($id);

        return view('genre.show',compact('data'));
    }

    public function edit($id){
        $data = Genre::findOrFail($id);

        return view('genre.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'string',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();

        return redirect()->route('genre');
    }

    public function destroy($id){
        $data = Genre::findOrFail($id);

        $data->delete();

        return redirect()->back();
    }
}
