@extends('Templete.Templete')
@section('plantillaweb')
 <h2> Edicion de ambiente No. {{$ambiente->id}}</h2> 
<form action="{{route('ambientes.update', $ambiente)}}" method="post">
    @method('PUT')
  {{ csrf_field() }}
    <div class="col-lg-6 col-md-4 col-sm-2">
      <label for="" class="form-label">Aula lunes</label>
      <input type="text" class="form-control" name="aula_lunes" value="{{$ambiente->aula_lunes}}">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Aula martes</label>
        <input type="text" class="form-control" name="aula_martes" value="{{$ambiente->aula_martes}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Aula  miercoles</label>
        <input type="text" class="form-control" name="aula_miercoles" value="{{$ambiente->aula_miercoles}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">aula jueves</label>
        <input type="text" class="form-control" name="aula_jueves" value="{{$ambiente->aula_jueves}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">aula viernes</label>
        <input type="text" class="form-control" name="aula_viernes" value="{{$ambiente->aula_viernes}}">
      </div>
       </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
@endsection