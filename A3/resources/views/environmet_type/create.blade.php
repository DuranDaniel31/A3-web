@extends('templates.base')
@section('title', 'Tipo de ambiente')
@section('header', 'Tipo de ambiente')
@section('content')
    @include('templates.messages')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf
                
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control"
                        id="description " name="description" required>
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
                        <a href="{{  route('environmet_type.index') }}" class="btn btn-secondary btn-block">
                        Cancelar
                        </a>
                    </div>
                </div>  
                    

            </form>
        
        </div>
   
    </div>

@endsection