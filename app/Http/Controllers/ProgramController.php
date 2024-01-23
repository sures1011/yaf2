<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Programs::all();
        return view('programs.index')->with('programs', $programs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Programs::create([
            'name'=> $request->input('name'),
            'description'=> $request->input('description'),
        ]);
        return redirect()->route('programs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Programs $program)
    {
        $programs = Programs::all();
        return view('welcome')->with('programs', $programs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programs $program)
    {
        $programs = Programs::all(); 
        return view('programs.edit', compact('programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programs $program)
    {
        $programs->update([
            'name'=> $request->input('name'),
            'description'=> $request->input('description'),
            // 'id'=>$request->input('id')
            
            
        ]);
        return redirect()->route('programs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programs $program)
    {
        $programs -> delete();
        return redirect()->route('programs.index');
    }
}
