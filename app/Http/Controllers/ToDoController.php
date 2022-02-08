<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function home() {
        $todos = Todo::all();
        // dd($todos);
        return view('home',['todos' => $todos]);
    }

    public function store(Request $request) {
        // dd($request); 
        // dd($request->post('title'));
        $validetor = $request->validate([
            'title' => 'required|max:124'   
        ]);
        Todo::create($validetor);
        // $todo = new Todo;
        // $todo->title = $request->title;
        // $todo->save();
        return back();
    }

    public function edit(Todo $todo){
        // $todo = Todo::findOrFail($id);
        // dd($todo);
        return view('update',compact('todo'));
    }

    public function update(Request $request, Todo $todo){
        $validetor = $request->validate([
            'title' => 'required|max:124'   
        ]);
        $todo->update($validetor);
        // $todo->title = $validetor['title'];
        // $todo->save();
        return redirect(route('home'));
        // dd($validetor);
    }

    public function delete(Todo $todo){
        // $todo = Todo::findOrFail($id);
        // dd($todo);
        $todo->delete();
        return back();
    }
}
