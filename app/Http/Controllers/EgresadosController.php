<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Egresados;
class EgresadosController extends Controller
{
    public function index()
    {
        $egresados = Egresados::all(); 
        return response()->json($egresados);
    }
    public function create(Request $request)
    {
        $egresados = new Egresados();
        $egresados->edni = $request->edni;
        $egresados->eapellidomaterno = $request->eapellidomaterno;
        $egresados->eapellidopaterno = $request->eapellidopaterno;
        $egresados->enombre = $request->enombre;
        $egresados->ecodigo = $request->ecodigo;
        $egresados->egenero = $request->egenero;
        $egresados->enpais = $request->enpais;
        $egresados->enprovincia = $request->enprovincia;
        $egresados->endepartamento = $request->endepartamento;
        $egresados->endistrito = $request->endistrito;
        $egresados->eadistrito = $request->eadistrito;
        $egresados->eacelular = $request->eacelular;
        $egresados->eadepartamento = $request->eadepartamento;
        $egresados->anioingreso = $request->anioingreso;
        $egresados->codigoegreso = $request->codigoegreso;
        $egresados->anioegreso = $request->anioegreso;
        $egresados->filialegreso = $request->filialegreso;
        $egresados->egresadousers = auth()->user()->id;
        $egresados->save();
        return response()->json($egresados);
    }
    public function store(Request $request)
    {
    }
    public function egresoFiltrer(Request $request){

        $ecodigo = $request->ecodigo;
        $eapellidopaterno = $request->eapellidopaterno;
        $enombre = $request->enombre;

        $users = Egresados::orderBy('id', 'DEC')
            ->codigo($ecodigo)
            ->paterno($eapellidopaterno)
            ->nombre($enombre)
            ->get();


            return response()->json($users);
    }
    public function show($id)
    {
        $egresados= Egresados::findOrFail($id);
        return response()->json($egresados);
    }
    public function edit($id)
    {
        Egresados::findOrFail($id)->edit($request->all());
        return response()->json(['success' => true]);
    }
    public function update(Request $request, $id)
    {
        Egresados::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);  
    }
    public function destroy($id)
    {
        Egresados::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
