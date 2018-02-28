<?php


namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;





class ControlaUsuarios extends Controller
{
     function __construct(){
        $this->middleware('auth');
         $this->middleware('role:administrador,moderador');//aqui se agregan los roles
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $usuarios= \App\User::all();
        return view('usuario.index', compact('usuarios'));

    }
    public function create()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $usuario=DB::table('users')->where('id', $id)->first();
        return view('usuarios.edit',compact('usuario'));
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
       

         DB::table('users')->where('id',$id)->update([
        "name" => $request->input('name'),
        "email" => $request->input('email'),
        "password" => $request->input('password'),
        "role" => $request->input('role'),
       
      
     ]);
         return redirect()->route('usuarios.index')->with('info', 'Hemos recibido tu mensaje'); 
      
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
