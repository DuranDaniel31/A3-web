@extends('templates.base')
@section('title', 'Editar Planificación_Ambiente')
@section('header', 'Editar Planificación_Ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control"
                        id="dexcription " name="description" required>
                    </div>

                </div>

                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="hours">Horas Estimadas</label>
                        <input type="numbers" class="form-control"
                        id="hours " name="hours" required>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="Technician_id">Tecnico</label>
                        <select class="form-control"
                        id="Technician_id " name="Technician_id" required>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="Technician_id">Tipo</label>
                        <select class="form-control"
                        id="type_id " name="type_id" required>
                    </div>

                </div>

                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="btn btn-primary btn-block"
                        type="submit">
                            Guardar
                        </a>
                    </div>                       
                    <div class="col-lg-6 mb-4">
                        <a href="{{  route('location.index') }}" class="btn btn-secondary btn-block">
                        Cancelar
                        </a>
                    </div>
                </div>  
                    
                    
            </form>
        
        </div>
   
    </div>

@endsection
