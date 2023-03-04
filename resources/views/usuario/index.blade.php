@extends('layouts.app')

@section('content')

<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a href="{{ url('usuario/create') }}" class="btn btn-success">Añadir usuario</a>
    <div class="search-container">
    <input type="text" placeholder="Buscar Nombre">
    <button type="button">Buscar</button>
    </div>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>

                <th>Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo Electronico</th>
                <th>Número Telefonico</th>
                <th>Rol</th>

                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $usuarios as $usuario )
            <tr>
                <td>{{ $usuario->id }}</td>

                <td>{{ $usuario->Nombre }}</td>
                <td>{{ $usuario->Segnombre }}</td>
                <td>{{ $usuario->Apellidop }}</td>
                <td>{{ $usuario->Apellidom }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->Telefono }}</td>
                <td>{{ $usuario->Rol }}</td>
            
                <td>
                    
                <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a> 
                |
                    
                <form action="{{ url('/usuario/'.$usuario->id) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
