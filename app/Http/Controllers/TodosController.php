<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class TodosController extends Controller
{
    public function index() {
        
        return view('todos.index')->with('todos', Todo::all());
    }
    
    public function show(Todo $todo) {
       // die(var_dump($todoId)); 
       //dd($todoId);
        return view('todos.show')->with('todo', $todo);///View single todo
    }
    
    ///Create new todo funtion
    public function create() {
        return view('todos.create');
    }
    ///Submit the new todos to the DB
    public function save() {
        ///First of all validate the request
        $this->validate(request(), [
            'name' =>         'required|min:6|max:17',
            'description' =>  'required'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        return Redirect::to("/todos")->withSuccess('The todo was created successfully');
    }
    
    ///Editing The Todo function
    public function edit(Todo $todo){
        return view('todos.edit')->with('todo', $todo);
    }
    public function update(Todo $todo) {
        ///First of all validate the request
        $this->validate(request(), [
            'name' =>         'required|min:6|max:17',
            'description' =>  'required'
        ]);
        $data = request()->all();
                
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();   
        Session::flash('success', 'Great the Todo was edited successfully');
        return redirect('/todos');
    }
    
    ///Delete Todo function
    public function delete(Todo $todo) {
        $todo->delete();
        Session::flash('success', 'Great the Todo was deleted successfully');
        return redirect('/todos');
    }
    
    ///Complete todo method
    public function complete(Todo $todo) {
        $todo->completed = true;
        $todo->save();
        Session::flash('Success', 'Great job the todo was completed');
        return redirect('/todos');
    }
}