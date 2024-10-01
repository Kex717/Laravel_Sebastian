<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerUsers extends Controller
{
    public function usuarios(){
        return("sebastian, mensaje por medio del controlador");
    }
}
