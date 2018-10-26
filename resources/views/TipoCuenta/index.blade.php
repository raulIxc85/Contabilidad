@extends('layouts.plantilla')
@section ('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status')}}
</div>
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form action="{{ action('TipoCuentaController@guardar') }}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Tipo de Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                {{ csrf_field() }}
                <div class="form-group">
                      <label for="cuenta">Codigo Cuenta</label>
                      <input type="text" required class="form-control" name="codigo" placeholder="Codigo Tipo de Cuenta">
                </div>
                <div class="form-group">
                    <label for="cuenta">Cuenta</label>
                    <input type="text" required class="form-control" name="tipoCu" placeholder="Tipo de Cuenta">
                  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </form>
  </div>
</div>

<!-- finaliza modal -->

        <div class="container-fluid">
            <h1>Tipo Cuenta</h1>
            <hr />
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Nuevo tipo cuenta
            </button>
            <a href="{{ action('HomeController@index') }}" class="btn btn-outline-secondary">
              Salir
            </a>
            <br />
            <br />
            <div class="row">
                <div class="col-sm-12">
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                          <th colspan="6" class="text-center">Listado Tipos de Cuenta</th>
                        </tr>
                        <tr>
                          <th>Codigo</th>
                          <th>Descripcion</th>
                          <th class="text-center"><i class="fas fa-edit"></i></th>
                          <th class="text-center"><i class="fas fa-trash-alt"></i></i></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($Tipo as $Tipos)

                      <tr>
                        <td>{{ $Tipos->CodigoTipoCuenta }}</td>
                        <td>{{ $Tipos->Descripcion }}</td>
                        <td class="text-center"><a href="{{ action('TipoCuentaController@editar',['id'=>$Tipos->CodigoTipoCuenta]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></td>
                        <td class="text-center"><a href="{{ action('TipoCuentaController@eliminar',['id'=>$Tipos->CodigoTipoCuenta]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></i></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

@endsection
