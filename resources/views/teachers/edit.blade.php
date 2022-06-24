@extends('Templete.Templete')
@section('plantillaweb')
 <h2> Edicion de Profesores No. {{$teacher->id}}</h2> 
<form action="{{route('profesores.update', $teacher)}}" method="post">
    @method('PUT')
  {{ csrf_field() }}
    <div class="col-lg-6 col-md-4 col-sm-2">
      <label for="" class="form-label">Nombres</label>
      <input type="text" class="form-control" name="nombres" value="{{$teacher->nombres}}">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" value="{{$teacher->apellidos}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" value="{{$teacher->direccion}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo" value="{{$teacher->correo}}">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="celular" value="{{$teacher->celular}}">
      </div>

      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Nivel Academico</label>
        <input disabled="disabled" type="text" class="form-control" name="nicel_academico" value="{{$teacher->nivel_academico}}">
        <br>
        <select class="form-select"  name="nivel_academico">
            <option selected>Nivel academico</option>
            <option value="1">Bachiller Academico y/o comercial</option>
            <option value="2">Tecnico</option>
            <option value="3">Tecnologo</option>
            <option value="4">Profesional</option>
            <option value="5">Magister</option>
            <option value="6">Doctorado</option>
        </select>
        
      </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
@endsection