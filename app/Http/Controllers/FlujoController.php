<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exceptions;

class FlujoController extends Controller
{
    public function IngresoDeDinero(Request $data) {
        try{
            DB::table("ingreso_de_dinero")->insert([
                "ingreso" => $data['ingreso'],
                "tipo" => $data['tipo'],
                "fecha" => $data['fecha']
            ]);
            
        } catch(Exeption $e) {
            return $e;
        }
    }

    public function EgresoDeDinero(Request $data){
        try{
            DB::table("egreso_de_dinero")->insert([
                "egreso" => $data['egreso'],
                "tipo" => $data['tipo'],
                "fecha" => $data['fecha']
            ]);
            
        } catch(Exeption $e) {
            return $e;
        }
    }

    public function bringAllIncome() {
        try {
            return DB::table("ingreso_de_dinero")->get();

        } catch (Exception $e) {
            return $e;
        }
    }

    public function bringAllEpanses() {
        try {
            return DB::table("egreso_de_dinero")->get();

        } catch (Exception $e) {
            return $e;
        }
    }
}
