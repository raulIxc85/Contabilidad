@extends('layouts.plantilla')
@section ('content')

@foreach ($TipoC as $tipo)
<h3 class="mx-5">Editar Tipo de Cuenta</h3>
<hr>
<br>
<div class="row">
    <div class="col-sm-4 mx-5">
        <form action="{{ action('TipoCuentaController@actualizar') }}" method="post">
          {{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" required class="form-control" name="cod" value="{{ $tipo->CodigoTipoCuenta }}">
            <label for="cuenta" class="col-sm-2 col-form-label">Cuenta</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="descrip" value="{{ $tipo->Descripcion }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Actualizar</button>
        <a href="{{ action('TipoCuentaController@index') }}" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</a>
        </form>
    </div>
  </div>
@endforeach
@endsection
