<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('welcome', ['notes' => $notes]);
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
        return redirect('/note/create')->with('msg', 'Note created');
    }

    public function delete(Request $request){
        $note = Note::find($request->id);
        $note->delete();
        return redirect('/')->with('msg', "Note $request->id deleted");
    }

    public function update(Request $request){
        $note = Note::findOrfail($request->id);
        if($note){
            $note->title = $request->title;
            $note->description = $request->description;
            $note->save();
            return redirect("/note/edit/$note->id")->with('msg', 'Note updated');
        }
        return redirect('/')->with('msg', 'Note not Found');
    }

    public function editNote(Request $request){
        return view('note-edition', ['id' => $request->id]);
    }

    public function show(Request $request){
        $note = Note::findOrfail($request->id);
        if($note){
            return view('note', ['note' => $note]);
        }
        return redirect('/')->with('msg', 'Note not Found');
    }
}
