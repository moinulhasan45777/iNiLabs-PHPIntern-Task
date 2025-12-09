<?php

namespace App\Http\Controllers;

use App\Models\todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    // Get Todos
    public function index()
    {
        return Todo::all();
    }

    // Post Todos
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:500',
        ]);

        $todo = todos::create([
            'description' => $request->description,
        ]);

        return response()->json($todo, 201);
    }

    // Update Todos
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:500',
        ]);

        $todo = todos::findOrFail($id);
        $todo->update([
            'description' => $request->description,
        ]);

        return response()->json($todo);
    }

    // Delete Todos
    public function destroy($id)
    {
        $todo = todos::findOrFail($id);
        $todo->delete();

        return response()->json(null, 204);
    }
}