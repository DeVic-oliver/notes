<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('welcome');
    }
    
    public function dashboard(){
        $notes = Note::where('owner_id', Auth::user()->id)->get();
        $warnings = Note::where('type', '=', 'warning')->get();
        $args = [
            'notes' => $notes,
            'warnings' => $warnings,
        ];
        return view('dashboard', $args);
    }

    public function createNote(){
        return view('note-creation', ['admin' => $this->checkIfIsAdmin()]);
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
            $note->type = $request->type;
            $note->save();
            return redirect("/note/edit/$note->id")->with('msg', 'Note updated');
        }
        return redirect('/dashboard')->with('msg', 'Note not Found');
    }

    public function editNote(Request $request){
        $args = [
            'id' => $request->id,
            'admin' => $this->checkIfIsAdmin(),
        ];
        return view('note-edition',  $args);
    }

    public function show(Request $request){
        $note = Note::findOrfail($request->id);
        if($note){
            return view('note', ['note' => $note]);
        }
        return redirect('/dashboard')->with('msg', 'Note not Found');
    }

    public function showWarning(Request $request){
        $note = Note::findOrfail($request->id);
        if($note){
            $args = [
                'warning' => $note,
                'isAdmin' => $this->checkIfIsAdmin(),
            ];
            return view('warning', $args);
        }
        return redirect('/dashboard')->with('msg', 'Note not Found');
    }

    private function checkIfIsAdmin(){
        if(Auth::user()->role == 'administrator'){
            return true;            
        }
        return false;
    }
}
