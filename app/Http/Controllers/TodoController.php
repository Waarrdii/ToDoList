<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Data = Todo::orderBy('task','asc')->get();
        return view('app', ['data' =>$Data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['task' => 'required|min:3'],
            [
                'task.required' => 'kolom task wajib di isi',
                'task.min' => 'minimal 3 karakter'
            ]
        );

        $Data = [
            'task' => $request->input('task')
        ];
        Todo::create($Data);
        return redirect()->route('todoIndex')->with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
