<?php

namespace App\Http\Controllers;

use App\Models\Insumo\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:listarInsumo')->only('Listar');
    }
    public function FormularioCrear(){

        return view('insumos/crear');
    }
    public function Listar(){

        return view('insumos/Listar' );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function create()
    {
        $campos=request()->validate([
            'nombre'=>'required|min:3',
            'estado' =>'required',
            'medida' => 'required',
            'stock_minimo'=>'required',
            'cantidad'=>'required',

        ]);
        Insumo::create($campos);
        return redirect('insumos/Listar')->with('mensaje','Insumo guardado');
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function eliminar(Insumo $insumo){
        $insumo->delete();
        return redirect('insumos/Listar')->with('mensaje','insumo eliminado');
    }
}
