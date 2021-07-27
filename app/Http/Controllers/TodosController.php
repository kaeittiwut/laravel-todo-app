<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Solution 1
        // return Todo::where('user_id', auth()->user()->id)->get();

        // Solution 2
        return auth()->user()->todos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = $request->validate([
            'title' => 'required|string',
            'completed' => 'required|boolean',
        ]);

        $todo = Todo::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'completed' => $request->completed,
        ]);

        return response($todo, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        if ($todo->user_id !== auth()->user()->id) {
            return response()->json('Unauthorized', 401);
        }

        $data = $request->validate([
            'title' => 'required|string',
            'completed' => 'required|boolean',
        ]);

        $todo->update($data);

        return response($todo, 200);
    }

    public function updateAll(Request $request)
    {
        $data = $request->validate([
            'completed' => 'required|boolean',
        ]);

        Todo::where('user_id', auth()->user()->id)->update($data);

        return response()->json('Updated', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        if ($todo->user_id !== auth()->user()->id) {
            return response()->json('Unauthorized', 401);
        }

        $todo->delete();

        return response()->json('Deleted todo item', 200);
    }

    public function destroyCompleted(Request $request)
    {
        // Solution 1
        /*$todosToDelete = $request->todos;

        $userTodoIds = auth()->user()->todos->map(function ($todo) {
        return $todo->id;
        });

        $valid = collect($todosToDelete)->every(function ($value, $key) use ($userTodoIds) {
        return $userTodoIds->contains($value);
        });

        if (!$valid) {
        return response()->json('Unauthorized', 401);
        }

        $request->validate([
        'todos' => 'required|array',
        ]);

        Todo::destroy($request->todos);
         */

        // Solution 2
        auth()->user()->todos()->where('completed', true)->delete();

        return response()->json('Deleted', 200);
    }
}
