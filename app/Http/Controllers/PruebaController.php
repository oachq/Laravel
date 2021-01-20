<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PruebaController extends Controller {
    public function prueba($param){
        return "Este pedo esta jalando dentro de Controller y recibo un params: " . " " . $param;
    }
}