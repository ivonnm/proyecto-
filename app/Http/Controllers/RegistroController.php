<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use PDF;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['registros']=Registro::paginate(1);
        return view('crud.index', $datos);


    }
    public function pdf()
    {
        $datos=Registro::paginate();

        $pdf = PDF::loadView('crud.pdf',['registro'=>$datos]);
        $pdf -> loadHTML ( '<h1> Prueba </h1>' );
        return $pdf->stream();

        //return view('crud.pdf', compact('datos'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //aqui recibimos lo que enviamos del formulario
        //return $request->all(); verificamos que si guarde lo creado
      /** */
        $registro = new Registro();
        $registro->fotografia = $request->fotografia;
        $registro->nombre = $request->nombre;
        $registro->apellidoP = $request->apellidoP;
        $registro->apellidoM =  $request->apellidoM;
        $registro->direccion =  $request->direccion;
        $registro->nivel = $request->nivel;
        $registro->horario = $request->horario;
        $registro->telefono = $request->telefono;
        $registro->edad = $request->edad;
        $registro->dias = $request->dias;
        $registro->correo = $request->correo;


        if($request->hasFile('fotografia')){
            $registro['fotografia']=$request->file('fotografia')->store('uploads','public');
        }


        $registro->save();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro=Registro::findOrFail($id);
        return view('crud.edit', compact('registro') );
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
        $datos = request()->except(['_token','_method']);
        Registro::where('id','=',$id)->update($datos);

        $registro=Registro::findOrFail($id);
        return view('crud.edit', compact('registro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registro::destroy($id);
        return redirect('/crud/index');
    }
}
