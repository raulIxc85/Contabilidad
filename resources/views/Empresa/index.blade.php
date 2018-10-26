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
        <h5 class="modal-title" id="exampleModalLabel">Nueva Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                {{ csrf_field() }}
                <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" required class="form-control" name="nombre" placeholder="Nombre Empresa">
                </div>
                <div class="form-group">
                    <label for="razon">Razon Social</label>
                    <input type="text" required class="form-control" name="razon" placeholder="Razon Social">
                </div>
                <div class="form-group">
                        <label for="nit">Nit</label>
                        <input type="text" required class="form-control" name="nit" placeholder="Nit">
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
            <h1>Empresas</h1>
            <hr />
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Nueva Empresa
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
                          <th colspan="6" class="text-center">Listado Empresas</th>
                        </tr>
                        <tr>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Razon Social</th>
                          <th>Nit</th>
                          <th class="text-center"><i class="fas fa-edit"></i></th>
                          <th class="text-center"><i class="fas fa-trash-alt"></i></i></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($Emp as $Emps)

                      <tr>
                        <td>{{ $Emps->CodigoEmpresa }}</td>
                        <td>{{ $Emps->Nombre }}</td>
                        <td>{{ $Emps->RazonSocial }}</td>
                        <td>{{ $Emps->Nit }}</td>

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
