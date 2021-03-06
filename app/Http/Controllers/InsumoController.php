<?php

namespace App\Http\Controllers;

use App\Models\Insumo\Entrada;
use App\Models\Insumo\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:listarInsumo')->only('Listar');
    }
    public function FormularioCrear(){

        $entradas = Entrada::all();
        return view('insumos/crear', compact('entradas'));
    }
    public function FormularioEditar($id){
        $insumo = Insumo::find($id);
        return view('insumos/editar',compact('insumo'));
    }
    public function FormularioEntrada($id){
        $insumo = Insumo::find($id);
        $entradas = Entrada::where('idInsumo',$id)->get();
        $total = Entrada::where('idInsumo',$id)->sum('cantidad');
        return view('insumos/entrada',compact('insumo','entradas','total'));
    }
    public function Listar(){

        return view('insumos/Listar');
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



        ]);

        Insumo::create($campos);
        return redirect('insumos/Listar')->with('mensaje','Insumo guardado');
    }
    public function crearEntrada()
    {
        $campos=request()->validate([
            'cantidad'=>'required',
            'lote' =>'required',
            'caducidad' => 'required',
            'idInsumo' => 'required',
        ]);
        Entrada::create($campos);
        return back()->with('mensaje','Entrada guardado');
    }
    public  function  findIdEntrada($id){
        $idEntrada = Entrada::find($id);
        return view('insumos/crear',compact('idEntrada'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function actualizar(Insumo $insumo){
        $campos=request()->validate([
            'nombre'=>'required|min:3',
            'estado' =>'required',
            'medida' => 'required',
            'stock_minimo'=>'required',
            'cantidad'=>'required',

        ]);
        $insumo->update($campos);
        return redirect('insumos/Listar')->with('mensaje', 'insumo actualizado');
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
