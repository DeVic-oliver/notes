<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('index', ['notes' => $notes]);
    }

    public function createNote(){
        return view('note-creation');
    }

    public function store(Request $request){
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->owner_id = 1;
        $note->save();
        return redirect('/note-creation')->with('msg', 'Note created');
    }
}
