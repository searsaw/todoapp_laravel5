<?php

namespace TodoApp\Http\Controllers;

use TodoApp\Http\Controllers\Controller;
use TodoApp\Models\Todo;
use Auth;
use Input;

class TodosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $todos = Auth::user()->todos()->notCompleted()->get();

        return view('todos/index', [ 'todos' => $todos ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('todos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $todo = new Todo;
        $todo->description = Input::get('description');
        $todo->user_id = Auth::user()->id;
        $todo->save();

        return redirect(route('todos.show', $todo));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);

        return view('todos/show', [ 'todo' => $todo ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todos/edit', [ 'todo' => $todo ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $todo = Todo::find($id);
        $todo->description = Input::get('description');
        $todo->completed = Input::get('completed', false);
        $todo->save();

        return view('todos/show', [ 'todo' => $todo ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Todo::destroy($id);
        return redirect('/todos');
    }
}
