@extends('Templete.Templete')
@section('plantillaweb')
    <h2> Registro de materias</h2>
    <form action="{{ route('materias.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Nombre Materia</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">creditos</label>
            <input type="text" class="form-control" name="creditos">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">costo</label>
            <input type="text" class="form-control" name="costo">
        </div>



        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
