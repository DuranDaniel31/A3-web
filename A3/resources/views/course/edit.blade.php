@extends('templates.base')
@section('Editar curso')
@section('Editar curso')

@section('content')
    @include('templates.messages')

    <div class="row">
        <div class="col lg-12 mb-4">
            <form action="" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col lg-6 mb-4">
                        <label for="code">Codigo</label>
                        <input type="number" class="form-control" id="code" name="code" required>
                    </div>
                    <div class="col lg-6 mb-4">
                        <label for="shift">cambio</label>
                        <input type="text" class="form-control" id="shift" name="shift" required>
                    </div>
                    <div class="col lg-6 mb-4">
                        <label for="career_id">Identificación de carrera</label>
                        <input type="number" class="form-control" id="career_id" name="career_id" required>
                    </div>
                    <div class="col lg-6 mb-4">
                        <label for="initial_date">Fecha inical</label>
                        <input type="number" class="form-control" id="initial_date" name="initial_date" required>
                    </div>
                    <div class="row form-group">
                        <div class="col lg-6 mb-4">
                            <label for="final_date">Fecha final</label>
                            <input type="number" class="form-control" id="final_date" name="final_date" required>
                        </div>
                        <div class="row fore-group">
                            <label for="status">Estado</label>
                            <select  class="form-control" id="status" name="status" required>
                                    <option value="">seleccione</option>
                            </select>
                       </div>                      
                    </div>
                    <div class="row form-group">
                        <div class="col lg-6 mb-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                guardar
                            </button>
                        </div>
                        <div class="col lg-6 mb-4">
                            <a href="{{ route('course.index') }}" class="btn btn-secondary btn-block">
                            cancelar
                        </a>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="alert alert-warning" role="alert">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
