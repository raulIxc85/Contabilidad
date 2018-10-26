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
  <form action="#" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                {{ csrf_field() }}
                <div class="form-group">
                      <label for="nivel1">Nivel 1</label>
                      <input type="text" required class="form-control" name="nivel1" >
                </div>
                <div class="form-group">
                    <label for="nivel2">Nivel 2</label>
                    <input type="text" required class="form-control" name="nivel2">
                </div>
                <div class="form-group">
                        <label for="nivel3">Nivel 3</label>
                        <input type="text" required class="form-control" name="nivel3">
                </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i>  Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i>  Cancelar</button>
      </div>
    </div>
  </form>
  </div>
</div>

<!-- finaliza modal -->

        <div class="container-fluid">
            <h1>Cuentas</h1>
            <hr />
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Nueva Cuenta
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
                          <th colspan="10" class="text-center">Listado de Cuentas</th>
                        </tr>
                        <tr class="text-center">
                          <th>#</th>
                          <th colspan="6">No. Cuenta</th>
                          <th>Descripcion</th>
                          <th class="text-center"><i class="fas fa-edit"></i></th>
                          <th class="text-center"><i class="fas fa-trash-alt"></i></i></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($cuenta as $cuentas)

                      <tr>
                        <td>{{ $cuentas->CodigoCuenta }}</td>
                        <td>{{ $cuentas->Nivel1 }}</td>
                        <td>{{ $cuentas->Nivel2 }}</td>
                        <td>{{ $cuentas->Nivel3 }}</td>
                        <td>{{ $cuentas->Nivel4 }}</td>
                        <td>{{ $cuentas->Nivel5 }}</td>
                        <td>{{ $cuentas->Nivel6 }}</td>
                        <td>{{ $cuentas->Descripcion }}</td>

                        <td class="text-center"><a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></td>
                        <td class="text-center"><a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></i></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

@endsection
