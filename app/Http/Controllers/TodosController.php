<?php

namespace App\Http\Controllers;


use Session;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();

        return view('todos' , [
            'todos' => $todos
        ]);
    }

    public function store(Request $request){
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success', 'New record has been saved');

        return redirect()->back();
    }
    public function delete(Todo $id){
        $id->delete();
        Session::flash('success', 'New record has been deleted');
        return redirect()->back();
    }
    public function update(Todo $id){
        return view('update')->with('todo' , $id);
    }
    public function save(Request $request, $id){
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success', 'New record has been updated');

        return redirect('/todos');
    }
    public function completed(Todo $id){
        $id->completed = 1;
        $id->save();
        return redirect()->back();

    }


}
