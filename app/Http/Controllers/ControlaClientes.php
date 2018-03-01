<?php

namespace App\Http\Controllers;

use App\Cliente;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class ControlaClientes extends Controller
{
      function __construct(){
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=DB::table('clientes')->get();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());

        return redirect()->route('cliente.index')->with('info', 'Hemos recibido tu mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
        // $cliente=DB::table('clientes')->where('id', $id)->first();
        // return view('clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=DB::table('clientes')->where('id', $id)->first();
        return view('clientes.edit',compact('cliente'));
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
        DB::table('clientes')->where('id',$id)->update([
        "nombre" => $request->input('nombre'),
        "apellido" => $request->input('apellido'),
        "localidad" => $request->input('localidad'),
        "domicilio" => $request->input('domicilio'),
        "telefono" => $request->input('telefono'),
      
     ]);
         return redirect()->route('cliente.index')->with('info', 'Hemos recibido tu mensaje'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           DB::table('clientes')->where('id',$id)->delete();
         return redirect()->route('cliente.index')->with('info', 'Hemos recibido tu mensaje'); 
    }

    public function search($search){
        $searched=urldecode($search);

        $cliente=Cliente::select()
            ->where('nombre','LIKE',$searched)
            ->orderBy('id','desc')
            ->get();
          
            if(count($cliente) == 0){

                return view('clientes.search')
                ->with('message','No hay resultados que mostrar')
                ->with('search',$search);
            }else
                {
                    return view('clientes.search')
                    ->with('cliente',$cliente)
                    ->with('search',$search);
                }

    }
}
