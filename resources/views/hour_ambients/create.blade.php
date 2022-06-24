@extends('Templete.Templete')
@section('plantillaweb')
    <h2> horas de grupo</h2>
    <form action="{{ route('hora_grupo.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Lunes</label>
            <input type="text" class="form-control" name="hora_lunes">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Martes</label>
            <input type="text" class="form-control" name="hora_martes">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Miercoles</label>
            <input type="text" class="form-control" name="hora_miercoles">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Jueves</label>
            <input type="text" class="form-control" name="hora_jueves">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">Hora Viernes</label>
            <input type="text" class="form-control" name="hora_viernes">
        </div>



        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
