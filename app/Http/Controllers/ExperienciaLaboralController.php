<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ExperienciaLaboral;
use App\User;

class ExperienciaLaboralController extends Controller
{
    public function index()
    {
        //$experiencialaboral = ExperienciaLaboral::all(); 
        $experiencialaboral=User::join('egresados','egresados.egresadousers','users.id')
        ->join('experiencia_laboral','experiencia_laboral.egresado_id','egresados.id')
        ->where('users.id','=',auth()->user()->id)
        ->select('experiencia_laboral.empresa','experiencia_laboral.rubro','experiencia_laboral.puesto',
        'experiencia_laboral.inicio','experiencia_laboral.fin','experiencia_laboral.egresado_id',
        'egresados.enombre')
        ->get();
        return response()->json($experiencialaboral);
    }

    public function create(Request $request)
    {
        ExperienciaLaboral::create($request->all());
        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        
        $experiencialaboral= ExperienciaLaboral::findOrFail($id);
        return response()->json($experiencialaboral);
    }

    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        ExperienciaLaboral::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);

    }
    public function destroy($id)
    {
        ExperienciaLaboral::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
