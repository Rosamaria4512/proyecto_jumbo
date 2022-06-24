@extends('Templete.Templete')
@section('plantillaweb')
    <h2> listado de Profesores</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
                <th scope="col">Nivel Academico</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <th scope="row">{{ $teacher->id }}</th>

                    <td>{{ $teacher->nombres }}</td>
                    <td>{{ $teacher->apellidos }}</td>
                    <td>{{ $teacher->direccion }}</td>
                    <td>{{ $teacher->correo }}</td>
                    <td>{{ $teacher->celular }}</td>
                    <td>{{ $teacher->nivel_academico }}</td>
                    <td>
                        <a href="{{ route('profesores.edit', $teacher->id) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('profesores.destroy', $teacher->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            
                        </form>
                    </td>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $teachers->links() }}
@endsection
