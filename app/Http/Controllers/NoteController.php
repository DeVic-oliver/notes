<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        return view('index');
    public function store(Request $request){
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->owner_id = 1;
        $note->save();
        return redirect('/note-creation')->with('msg', 'Note created');
    }
}
