<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngresarFlujoController extends Controller
{
    public function IngreoDeDinero(Request $data) {
        return $data["ingreso"];
    }
}
