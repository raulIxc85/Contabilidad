<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoCuentaController extends Controller
{
    public function index(){
      $Tipo = DB::table("TipoCuenta")->get();
      return view('TipoCuenta.index',['Tipo'=>$Tipo]);

    }


    public function editar($id){
      $TipoC = DB::table("TipoCuenta")->where('CodigoTipoCuenta','=',$id)->get();
      //var_dump($TipoC);
      //die();
      return view('TipoCuenta.editar',['TipoC'=>$TipoC]);
    }

    public function actualizar(Request $request1){
      $id = $request1->input('cod');
      DB::update('update TipoCuenta set Descripcion = ? where CodigoTipoCuenta = ?',[$request1->input('descrip'),$id]);
      return redirect()->action('TipoCuentaController@index')->with('status','Tipo de cuenta modificada correctamente');;

    }

    public function guardar(Request $request){
        DB::insert('insert into TipoCuenta (CodigoTipoCuenta,Descripcion) values (?,?)', [$request->input('codigo'),$request->input('tipoCu')]);
        return redirect()->action('TipoCuentaController@index')->with('status','Tipo de cuenta creada correctamente');
    }


    public function eliminar($id){
        DB::table("TipoCuenta")->where('CodigoTipoCuenta','=',$id)->delete();
        return redirect()->action('TipoCuentaController@index')->with('status','Tipo de cuenta eliminada');
    }
}
