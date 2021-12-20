<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $todos = Todo::all()->toArray();

        return view('todos.index', [
            'todos' => $todos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Todo::create($request->all());

        return redirect()->route('todo.index')->with('success','Задача успешно создана.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        $todo = Todo::find($id)->toArray();

        return view('todos.show', [
            'todo' => $todo,
        ]);
    }
}
