@extends('templates.base')
@section('title', 'Editar Carrera')
@section('header', 'Editar Carrera')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description"> Editar El Nombre de la Carrera</label>
                        <input type="text" class="form-control"
                        id="career " name="career" required>
                    </div>

                </div>

                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description"> Editar El Tipo de carrera</label>
                        <input type="text" class="form-control"
                        id="type " name="type" required>
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
                        <a href="{{  route('order.index') }}" class="btn btn-secondary btn-block">
                        Cancelar
                        </a>
                    </div>
                </div>  

                    
                    
            </form>
        
        </div>
   
    </div>

@endsection


