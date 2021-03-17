<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsumosController extends Controller
{
    public function Listar(){

        return view('insumos/Listar' );
    }
}
