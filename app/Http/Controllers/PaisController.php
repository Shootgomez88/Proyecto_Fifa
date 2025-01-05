<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        return Pais::all();
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required|unique:paises', 'continente' => 'required']);
        return Pais::create($request->all());
    }

    public function show($id)
    {
        return Pais::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pais = Pais::findOrFail($id);
        $pais->update($request->all());
        return $pais;
    }

    public function destroy($id)
    {
        return Pais::destroy($id);
    }
}
