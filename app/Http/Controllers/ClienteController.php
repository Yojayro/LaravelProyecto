<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //if($clientes.usuario=="alum"){
        //}
        $clientes = Cliente::all(); 
        //foreach($clientes as $cliente){
        //    echo $cliente->nombre."</br>";        
        //}
        // return response()->json(['success' => true,
        //    'data' => $clientes,
        //    'message' => 'Operacion Correcta'], 200);
        return response()->json($clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$d = new \stdClass();
        //$d->titulo = $request->input('titulo');
        //$d->descripcion = $request->input('descripcion');
        Cliente::create($request->all());
        return response()->json(['success' => true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cliente= Cliente::findOrFail($id);
        //echo "$cliente->nombre<br>";
        //echo "$cliente->apellido<br>";
        //echo "$cliente->telefono<br>";
        //echo "$cliente->direccion<br>";
        return response()->json($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
            Cliente::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);
        

        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}


/**
use App\themes;
class ThemesController extends Controller
{
    public function index()
    {
        return response()->json(['success' => true,
            'data' => $this->listar_data(),
            'message' => 'Operacion Correcta'], 200);
    }

    public function create(Request $request)
    {
        $tema = new \stdClass();

        $tema->titulo = $request->input('titulo');
        $tema->descripcion = $request->input('descripcion');
        $tema->fecha = $request->input('fecha');
        $tema->asesor = $request->input('asesor');
        themes::create($request->all());
        return response()->json(
            ['success' => true,
                'data' => $this->listar_data(),
                'message' => 'Operacion Correcta'],
            201);
    }

    public function update(Request $request, $id)
    {
        themes::find($id)->update($request->all());
        return response()->json(
            ['success' => true,
                'data' => $this->listar_data(),
                'message' => 'Operacion Correcta'],
            201);
    }

    public function destroy($id)
    {
        themes::find($id)->delete();
        return response()->json(
            ['success' => true,
                'data' => $this->listar_data(),
                'message' => 'Operacion Correcta'],
            201);
    }

    public function listar_data()
    {

        return themes::all();
    }
}
**/