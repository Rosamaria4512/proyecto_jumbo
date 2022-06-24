@extends('Templete.Templete')
@section('plantillaweb')
    <h2> listado de Ambientes</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">aula lunes</th>
                <th scope="col">aula martes</th>
                <th scope="col">aula miercoles</th>
                <th scope="col">aula jueves</th>
                <th scope="col">aula viernes</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($ambients as $ambient)
                <tr>
                    <th scope="row">{{$ambient->id}}</th>
                   
                    <td>{{$ambient->aula_lunes}}</td>
                    <td>{{$ambient->aula_martes}}</td>
                    <td>{{$ambient->aula_miercoles}}</td>
                    <td>{{$ambient->aula_jueves}}</td>
                    <td>{{$ambient->aula_viernes}}</td>
                    <td>
                        <a href="{{ route('ambientes.edit', $ambient->id) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true">Editar</a>
                    </td>
                     <td>
                        <form action="{{ route('ambientes.destroy', $ambient->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            
                        </form>
                    </td>  
                     

                  
                    
                </tr>
            @endforeach

        </tbody>
    </table>
     {{$ambients->links()}} 
@endsection 
