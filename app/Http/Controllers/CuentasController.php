<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuentasController extends Controller
{
  public function index(){
   $cuenta = DB::table("Cuenta")->get();
   return view('Cuentas.index',['cuenta'=>$cuenta]);

 }
}
