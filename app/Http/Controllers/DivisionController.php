<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        return Division::all();
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required|unique:divisiones', 'region' => 'required']);
        return Division::create($request->all());
    }

    public function show($id)
    {
        return Division::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $division = Division::findOrFail($id);
        $division->update($request->all());
        return $division;
    }

    public function destroy($id)
    {
        return Division::destroy($id);
    }
}
