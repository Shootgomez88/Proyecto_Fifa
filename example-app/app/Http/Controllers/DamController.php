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
         // Buscar el registro específico por ID
        $dam = Dam::findOrFail($id);

        // Retornar la vista de edición y pasarle el registro
        return view('dam.edit', compact('dam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validar los datos enviados por el formulario
        $validatedData = $request->validate([
            'description' => 'required|string|max:255',
            'has_professor' => 'required|boolean',
            'year' => 'required|integer',
            'avg_mark' => 'nullable|numeric|min:0|max:10',
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
        ]);

        // Buscar el registro a actualizar
        $dam = Dam::findOrFail($id);

        // Actualizar los datos del registro
        $dam->update($validatedData);

        // Redirigir al índice con un mensaje de éxito
        return redirect()->route('dam.index')->with('success', 'Registro actualizado correctamente.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(string $id)
    {
        $dams = Dam::find($id);
        $dams->delete();
        
        if(!$dams){
            return redirect()->back()->with('error','Something went wrong');
        }
        return redirect()->route('dam.index');
    }*/
    public function destroy(string $id)
{
    // Buscar el registro en la base de datos
    $dams = Dam::find($id);

    // Validar si el registro existe
    if (!$dams) {
        return redirect()->back()->with('error', 'The record does not exist.');
    }

    // Intentar eliminar el registro
    try {
        $dams->delete();
        return redirect()->route('dam.index')->with('success', 'The record was deleted successfully.');
    } catch (\Exception $e) {
        // Capturar errores si ocurre algún problema al eliminar
        return redirect()->back()->with('error', 'An error occurred while trying to delete the record.');
    }
}

}
