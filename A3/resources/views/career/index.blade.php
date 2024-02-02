@extends('templates.base')
@section('title', 'Listado De Carreras')
@section('header', 'Listado De Carreras')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 d-grip gap-2 d-md-block">
            <a href="{{ route('career.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nombre De La Carrera</th>
                        <td>Tipo De Carrera</td>
                        

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Analisis y Desarrollo De Software</th>
                        <td>Tecnico</td>
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

