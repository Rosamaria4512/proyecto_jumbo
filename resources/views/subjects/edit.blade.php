@extends('Templete.Templete')
@section('plantillaweb')
 <h2> Edicion de Materias No. {{$subject->id}}</h2> 
<form action="{{route('materias.update', $subject)}}" method="post">
    @method('PUT')
  {{ csrf_field() }}
    <div class="col-lg-6 col-md-4 col-sm-2">
      <label for="" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="{{$subject->nombre}}">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Creditos</label>
        <input type="text" class="form-control" name="creditos" value="{{$subject->creditos}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Costo</label>
        <input type="text" class="form-control" name="costo" value="{{$subject->costo}}">
      </div>
       </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
@endsection