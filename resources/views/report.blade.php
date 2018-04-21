@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        </div>
    </div>
</div> -->

<div class="card">
    <div class="card-header">Registro</div>
    <div class="card-body">
        <form class="">
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id">
                    
                </select>
            </div>
            <div class="form-group">
                <label for="severity_id">Severiadad</label>
                <select class="form-control" name="severity_id">
                    <option value="M">Menor</option>
                    <option value="N">Normal</option>
                    <option value="A">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="titule">Titulo</label>
                <input type="text" name="titule" class="form-control">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar incidencia</button>
            </div>
        </form>
    </div>
</div>
@endsection
