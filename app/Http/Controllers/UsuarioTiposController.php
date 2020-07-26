<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarioTipos;
class UsuarioTiposController extends Controller
{
    public function index()
    {
        $usuarioTipos = usuarioTipos::join('users','usuario','users.id')
        ->join('tipos_usuario','usuario_tipos.tipo','tipos_usuario.id')
        ->join('egresados','egresados.egresadousers','users.id')
        ->select('users.id as usuario','usuario_tipos.id','usuario_tipos.tipo','tipos_usuario.nombre as nombre_tipo',
        'users.email as email','egresados.enombre as egresados')
        ->get(); 
        return response()->json($usuarioTipos);
    }
    public function create(Request $request)
    {
        usuarioTipos::create($request->all());
        return response()->json(['success' => true]);
    }
    public function update(Request $request, $id)
    {
        $usuarioTipos = usuarioTipos::findOrFail($id);
        $usuarioTipos->tipo = $request->tipo;
        $usuarioTipos->save();
        return response()->json($usuarioTipos); 
    }
    public function show($id)
    {
        $usuarioTipos = usuarioTipos::join('users','usuario','users.id')
        ->join('tipos_usuario','usuario_tipos.tipo','tipos_usuario.id')
        ->join('egresados','egresados.egresadousers','users.id')
        ->where('users.id','=',$id)
        ->select('users.id as usuario','usuario_tipos.id','usuario_tipos.tipo','tipos_usuario.nombre as nombre_tipo',
        'users.email as email','egresados.enombre as egresados')
        ->first(); 
        return response()->json($usuarioTipos);
    }
    public function edit($id)
    {
        usuarioTipos::findOrFail($id)->edit($request->all());
        return response()->json(['success' => true]);
    }
}
