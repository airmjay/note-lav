<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $note = Note::query()->where('user_id', request()->user()->id)->orderBy('id',"desc")->paginate();
        return view('notes.index',['notes' => $note]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
       
        $data = $request->validate(
            [
                'note' => ['required', 'string'],
            ]);
            $data['user_id']  = auth()->user()->id;
            $note = Note::create($data);
            return to_route('note.index', $note)->with('success', 'New Post Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(note $note)
    {
        if($note->user_id != auth()->user()->id){
            abort(403);
        }
        return view('notes.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(note $note)
    {
        if($note->user_id != auth()->user()->id){
            abort(403);
        }
        return view('notes.edit', ['note' =>$note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, note $note)
    {
        if($note->user_id != auth()->user()->id){
            abort(404);
        }
       $data =  $request->validate(
            [
                'note' => ['required', 'string']
            ]);
        $note->update($data);
        return to_route('note.index',$note)->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(note $note)
    {
        if($note->user_id != auth()->user()->id){
            abort(404);
        }
        $note->delete();
        return to_route('note.index',$note)->with('success', 'Post Deleted');
    }
}
