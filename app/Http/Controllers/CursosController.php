<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cursos;
class CursosController extends Controller
{
    public function index()
    {
        $cursos = Cursos::all(); 
        return response()->json($cursos);
    }

    public function create(Request $request)
    {
        Cursos::create($request->all());
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        
        $cursos= Cursos::findOrFail($id);
        return response()->json($cursos);
    }

    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        Cursos::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);

    }
    public function destroy($id)
    {
        Cursos::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
