@extends('Templete.Templete')
@section('plantillaweb')
<h2> Registro de Profesores</h2>
<form action="{{route('profesores.store')}}" method="post">
  {{ csrf_field() }}
    <div class="col-lg-6 col-md-4 col-sm-2">
      <label for="" class="form-label">Nombres</label>
      <input type="text" class="form-control" name="nombres">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Correo</label>
        <input type="text" class="form-control" name="correo">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="celular">
      </div>
      <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Nivel Academico</label>
        <select class="form-select"  name="nivel_academico">
            <option value="1">Bachiller Academico y/o comercial</option>
            <option value="2">Tecnico</option>
            <option value="3">Tecnologo</option>
            <option value="4">Profesion</option>
            <option value="5">Magister</option>
            <option value="2">Doctorado</option>
        </select>
        
      </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
@endsection