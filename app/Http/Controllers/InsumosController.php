<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsumosController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:listarInsumo')->only('Listar');
    }

    public function Listar(){

        return view('insumos/Listar' );
    }
}
