@extends('templates. base')
@section('title', 'Listado de Reportes')
@section ('header', 'Listado de Reportes')
@section(' content' )
    @include( 'templates.messages' )
        <div class="row">
        <div class="co1-1g-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Reporte General de Actividades Por Técnico</h6>
                </div>
                <div class="card-body">
                    <form action="{f route('reports.learning_environment') }}" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-1g-2">
                                <label for="learning_environment_id">Ambiente</label>
                            </div>
                        <div class="col-1g-5">
                            <select name="learning_environments" id="learning_environments" class="Form-control" required>
                                <option value="">Seleccione</option>
                                @Foreach($learning_environments as $learning_environment)
                                    <option value="{( $learning_environment->id })" {{$learning_environment->name 3}}></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="co1-1g-5">
                            <button type="submit" class="btn btn-primary btn-block col-18-3 mb-4">
                                <i class="fa-solid fa-file-pdf"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 @endsection
