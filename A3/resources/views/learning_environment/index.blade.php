@extends('templates.base')
@section('title', 'Listado causales')
@section('header', 'Listado causales')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('environmet_type.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Capacidad</th>
                        <th>Area en metros cuadrados</th>
                        <th>Piso</th>
                        <th>Inventario</th>
                        <th>Tipo</th>
                        <th>Ubicación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Aula 205</td>
                        <td>30</td>
                        <td>30</td>
                        <td>2</td>
                        <td>1 tv, 1 tablero, 30 pc</td>
                        <td>1</td>
                        <td>1</td>
                        <td>
                            <a href="#" title="editar" class="btn btn-info btn-circle btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" title="eliminar" class="btn btn-danger btn-circle btn-sm" onclick="return remove()">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

 @endsection

 @section('scripts')
    
 <script src="{{ asset('js/general.js') }}"></script>

 @endsection
 