<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Todo;

class TodosController extends Controller
{
    public function index()
    {
        return Todo::get();
    }

    public function show(Todo $todo)
    {
        return $todo;
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->all());

        return response()->json($todo, 201);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());

        return response()->json($todo, 200);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return response()->json(null, 204);
    }
}
