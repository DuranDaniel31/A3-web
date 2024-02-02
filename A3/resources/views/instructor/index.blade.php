@extends('templates.base')
@section('Lista de Instructores ')
@section('Lista de Instructores')

@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre completo</th>
                        <th>Correo sena</th>
                        <th>Correo personal</th>
                        <th>Numero</th>
                        <th>Contraseña</th>
                        <th>Tipo</th>
                        <th>Perfil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mrs. Sarai Marks I</td>
                        <td>hauck.ernestine@example.org</td>
                        <td>fay.armand@exmaple.com</td>
                        <td>872.909.7629</td>
                        <td>password</td>
                        <td>Contratista</td>
                        <td>Instructor de progrmación</td>
                        <td>
                            <a href="{{ route('instructor.create') }}" title="editar" 
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