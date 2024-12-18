<?php

namespace App\Http\Controllers;

use App\Models\dam;
use Illuminate\Http\Request;

class DamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dams = Dam::all();
        return view('dam.index',compact('dams'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dam = new Dam;

        $dam->description = $request->description;
        $dam->has_professor = $request->has_professor;
        $dam->year = $request->year;
        $dam->created_at = $request->created_at;
        $dam->avg_mark = $request->avg_mark;
        $dam->name = $request->name;
        $dam->course = $request->course;

        $dam->save();

        return redirect()->route('dam.index');
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
