@extends('templates.base')
@section('Lista de cursos ')
@section('Lista de cursos')

@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>codigo</th>
                        <th>Identificacion de la carrera</th>
                        <th>Fecha inicial</th>
                        <th>Fecha final</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2.171.233 </td>
                        <td>Diurna</td>
                        <td>1</td>
                        <td>2023-08-15</td>
                        <td>2024-10-04</td>
                        <td>Lectiva</td>
                        <td>
                            <a href="{{ route('course.create') }}" title="editar" 
                            class="btn btn-info-circle btn-sm">
                            <i class="far-fa-edit"></i>
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

