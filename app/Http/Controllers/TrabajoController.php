<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trabajos;
class TrabajoController extends Controller
{
    public function index()
    { 
        $trabajos = Trabajos::all(); 
        return response()->json($trabajos);
    }

    public function create(Request $request)
    {
        Trabajos::create($request->all());
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $trabajos= Trabajos::findOrFail($id);
        return response()->json($trabajos);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        
        Trabajos::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);      
    }
    public function destroy($id)
    {
        Trabajos::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
