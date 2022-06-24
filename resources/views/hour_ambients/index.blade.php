@extends('Templete.Templete')
@section('plantillaweb')
    <h2> listado de horas</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">hora lunes</th>
                <th scope="col">hora martes</th>
                <th scope="col">hora miercoles</th>
                <th scope="col">hora jueves</th>
                <th scope="col">hora viernes</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($hours as $hour)
                <tr>
                    <th scope="row">{{$hour->id}}</th>
                   
                    <td>{{$hour->hora_lunes}}</td>
                    <td>{{$hour->hora_martes}}</td>
                    <td>{{$hour->hora_miercoles}}</td>
                    <td>{{$hour->hora_jueves}}</td>
                    <td>{{$hour->hora_viernes}}</td>
                    <td>
                        <a href="{{ route('hora_grupo.edit', $hour->id) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('hora_grupo.destroy', $hour->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            
                        </form>
                    </td> 
                    

                  
                    
                </tr>
            @endforeach

        </tbody>
    </table>
    {{$hours->links()}}
@endsection
