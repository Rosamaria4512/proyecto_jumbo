@extends('Templete.Templete')
@section('plantillaweb')
    <h2> Registro de grupos</h2>
    <form action="{{ route('grupos.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Año</label>
            <input type="text" class="form-control" name="anio">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">periodo</label>
            <input type="text" class="form-control" name="periodo">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <select  class="form-control" name="teacher_id">
            <option selected ="true" disabled="disabled">Profesor</option>
            @foreach ($teachers as $teacher)
            <option value ="{{$teacher->id}}"> {{$teacher->nombres}} {{$teacher->apellidos}}</option>
            @endforeach
            </select>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-control" name="subject_id">
            <option selected ="true" disabled="disabled">Materia</option>
            @foreach ($subjects as $subject)
            <option value ="{{$subject->id}}"> {{$subject->nombre}}</option>
            @endforeach
            </select>

            
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label>Ambientes</label>
            <select class="form-control" name="ambient_id">
            <option selected ="true" disabled="disabled"></option>
            @foreach ($ambients as $ambient)
            <option value ="{{$ambient->id}}"> {{$ambient->aula_lunes}}</option>
            <option value ="{{$ambient->id}}"> {{$ambient->aula_martes}}</option>
            <option value ="{{$ambient->id}}"> {{$ambient->aula_miercoles}}</option>
            <option value ="{{$ambient->id}}"> {{$ambient->aula_jueves}}</option>
            <option value ="{{$ambient->id}}"> {{$ambient->aula_viernes}}</option>
            @endforeach
            </select>

            
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-control" name="hour_ambient_id">
            <option selected ="true" disabled="disabled">Horas ambientes</option>
            @foreach ($hours as $hour)
            <option value ="{{$hour->id}}"> {{$hour->hora_lunes}}</option>
            <option value ="{{$hour->id}}"> {{$hour->hora_martes}}</option>
            <option value ="{{$hour->id}}"> {{$hour->hora_miercoles}}</option>
            <option value ="{{$hour->id}}"> {{$hour->hora_jueves}}</option>
            <option value ="{{$hour->id}}"> {{$hour->hora_viernes}}</option>
            @endforeach
            </select>

            
        </div>



        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
