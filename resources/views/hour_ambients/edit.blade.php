@extends('Templete.Templete')
@section('plantillaweb')
 <h2> Edicion de horas No. {{$horas->id}}</h2> 
<form action="{{route('hora_grupo.update', $horas)}}" method="post">
    @method('PUT')
  {{ csrf_field() }}
    <div class="col-lg-6 col-md-4 col-sm-2">
      <label for="" class="form-label">horas lunes</label>
      <input type="text" class="form-control" name="hora_lunes" value="{{$horas->hora_lunes}}">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">horas martes</label>
        <input type="text" class="form-control" name="hora_martes" value="{{$horas->hora_martes}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">horas  miercoles</label>
        <input type="text" class="form-control" name="hora_miercoles" value="{{$horas->hora_miercoles}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">horas jueves</label>
        <input type="text" class="form-control" name="hora_jueves" value="{{$horas->hora_jueves}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">horas viernes</label>
        <input type="text" class="form-control" name="hora_viernes" value="{{$horas->hora_viernes}}">
      </div>
       </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
@endsection