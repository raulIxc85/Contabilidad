<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
   public function index(){
    $Emp = DB::table("Empresa")->get();
    return view('Empresa.index',['Emp'=>$Emp]);

  }
}
