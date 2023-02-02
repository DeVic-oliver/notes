<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(){
        if(Auth::check()){
            $notes = Note::all();
            return redirect('/dashboard')->with('notes', $notes);
        }
        return view('welcome');
    }
    
    public function dashboard(){
        $notes = Note::where('owner_id', Auth::user()->id)->get();
        return view('dashboard', ['notes' => $notes]);
    }

    public function createNote(){
        return view('note-creation');
    }

    public function store(Request $request){
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->owner_id = Auth::user()->id;
        $note->save();
        return redirect('/note/create')->with('msg', 'Note created');
    }

    public function delete(Request $request){
        $note = Note::find($request->id);
        $note->delete();
        return redirect('/dashboard')->with('msg', "Note $request->id deleted");
    }

    public function update(Request $request){
        $note = Note::findOrfail($request->id);
        if($note){
            $note->title = $request->title;
            $note->description = $request->description;
            $note->save();
            return redirect("/note/edit/$note->id")->with('msg', 'Note updated');
        }
        return redirect('/dashboard')->with('msg', 'Note not Found');
    }

    public function editNote(Request $request){
        return view('note-edition', ['id' => $request->id]);
    }

    public function show(Request $request){
        $note = Note::findOrfail($request->id);
        if($note){
            return view('note', ['note' => $note]);
        }
        return redirect('/dashboard')->with('msg', 'Note not Found');
    }
}
