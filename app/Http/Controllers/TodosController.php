<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        if($request->has('completed')) {
            $completed = true;
        } else {
            $completed = false;
        }

        Todo::create([
            'name' => $request->name,
            'description' => $request->description,
            'completed' => $completed
        ]);

        
        // Todo::create($request->all());
        return redirect('/todos')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
        return view('todos.edit', compact('todo'));
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
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        if($request->has('completed')) {
            $completed = true;
        } else {
            $completed = false;
        }

        Todo::where('id', $todo->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'completed' => $completed
            ]);
            return redirect('/todos')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
        Todo::destroy($todo->id);
        return redirect('/todos')->with('status', 'Data Berhasil Dihapus!');
    }
}
