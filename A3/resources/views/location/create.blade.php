@extends('templates.base')
@section('title', 'Crear Localización')
@section('header', 'Crear Localización')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Nombre De La Localización</label>
                        <input type="text" class="form-control"
                        id="location " name="location" required>
                    </div>

                </div>

                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Direccion</label>
                        <input type="text" class="form-control"
                        id="addres " name="addres" required>
                    </div>

                </div>
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Estado De La Localización</label>
                        <input type="text" class="form-control"
                        id="status " name="status" required>
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

