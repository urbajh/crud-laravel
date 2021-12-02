<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required'

        ]);

        //create user
        $usuario = new Usuario;
        $usuario -> nombre = $request ->input('nombre');
        $usuario -> email = $request ->input('email');
        $usuario -> telefono = $request ->input('telefono');

        $usuario -> save();
        return redirect('/')->with('success','Usuario Agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$usuario = Usuario::where('id', 1)->get();
        $usuario = Usuario::find($id);
        //var_dump($usuario);
        return view('usuarios.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit')->with('usuario',$usuario);
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
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required'
        ]);

        //update user
        $usuario = Usuario::find($id);
        $usuario -> nombre = $request ->input('nombre');
        $usuario -> email = $request ->input('email');
        $usuario -> telefono = $request ->input('telefono');

        $usuario -> save();
        return redirect('/')->with('success','Usuario Editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('/')->with('success','Usuario eliminado con exito');
    }
}
