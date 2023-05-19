<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Read
    public function index()
    {
        // Eager Loading
        $todos = todo::with('todoItems')->select('*')->get();
        return view('display_todos')->with('todos',$todos);
    }

    // Create
    public function create(Request $request)
    {
        todo::insert(['todo_name' => $request->user_input]);

    }
}
