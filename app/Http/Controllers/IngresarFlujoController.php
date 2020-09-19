<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngresarFlujoController extends Controller
{
    public function IngreoDeDinero(Request $data) {
        try{
            DB::table("ingreso_de_dinero")->insert([
                "ingreso" => $data['ingreso'],
                "tipo" => $data['tipo'],
                "fecha" => '0'
            ]);
        }
        catch(Exeption $e){
            return $e;
        }
    }
}
