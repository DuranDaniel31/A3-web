@extends('templates.base')
@section(' Editar instructor')
@section(' Editar instructor')

@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col lg-12 mb-4">
            <form action="" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col lg-6 mb-4">
                        <label for="fullname">Nombre completo</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="col lg-6 mb-4">
                        <label for="sena_email">Correo sena</label>
                        <input type="text" class="form-control" id="sena_email" name="sena_email" required>
                    </div>
                    <div class="row form-group">
                        <div class="col lg-6 mb-4">
                            <label for="personal_email">Correo personal</label>
                            <input type="text" class="form-control" id="personal_email" name="personal_email" required>                            
                        </div>
                        <div class="row fore-group">
                            <label for="phone">Numero</label>
                            <input type="number" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="row fore-group">
                            <label for="password">contraseña</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div> 
                        <div class="row fore-group">
                            <label for="type">Tipo</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                        </div>
                        <div class="row fore-group">
                            <label for="profile">Perfil</label>
                            <input type="text" class="form-control" id="profile" name="profile" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col lg-6 mb-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                guardar
                            </button>
                        </div>
                        <div class="col lg-6 mb-4">
                            <a href="{{ route('instructor.index') }}" class="btn btn-secondary btn-block">
                            cancelar
                        </a>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="alert alert-warning" role="alert">
                        <i class="fa-solid fa-lightbulb"></i>
                        para añadir actividades la actividad primero debe crearlas y luego darle click en la accion editar
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection