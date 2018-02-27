<?php

namespace App\Http\Controllers;

use App\Proveedor;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class ControlaProveedores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores=DB::table('proveedors')->get();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        Proveedor::create($request->all());

        return redirect()->route('proveedor.index')->with('info', 'Hemos recibido tu mensaje');
 
       // return view('proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $proveedor=DB::table('proveedors')->where('id', $id)->first();
        return view('proveedores.show',compact('proveedor'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor=DB::table('proveedors')->where('id', $id)->first();
        return view('proveedores.edit',compact('proveedor'));
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

     DB::table('proveedors')->where('id',$id)->update([
        "razon_social" => $request->input('razon_social'),
        "nombre" => $request->input('nombre'),
        "apellido" => $request->input('apellido'),
        "email" => $request->input('email'),
        "localidad" => $request->input('localidad'),
        "direccion" => $request->input('direccion'),
        "telefono" => $request->input('telefono'),
      
     ]);
         return redirect()->route('proveedor.index')->with('info', 'Hemos recibido tu mensaje'); 
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('proveedors')->where('id',$id)->delete();
         return redirect()->route('proveedor.index')->with('info', 'Hemos recibido tu mensaje'); 
    }
}
