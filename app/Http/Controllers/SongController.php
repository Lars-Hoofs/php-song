<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = song::all();
        return view('songs', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'singer' => 'required|max:255',
        ]);

        $song = Song::create($validatedData);
         return redirect('/songs')->with('success', 'Song is successfully saved');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {        
        $song = Song::findOrFail($id);

        return view('show', ['song' => $song]);
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $song = Song::findOrFail($id);
    
        return view('edit', ['song' => $song]);
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'singer' => 'required|max:255',
        ]);
    
        $song = Song::findOrFail($id);
        $song->update($validatedData);
    
        return redirect()->route('songs.show', ['id' => $id])->with('success', 'Song information has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $song = Song::find($id);
    
        if (!$song) {
            return redirect('/songs')->with('error', 'Song not found.');
        }
    
        $song->delete();
    
        return redirect('/songs')->with('success', 'Song has been deleted successfully.');
    }
}
