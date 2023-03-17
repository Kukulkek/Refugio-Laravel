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
    <a href="{{ url('adopcion/create') }}" class="btn btn-success">Añadir adopcion</a>
    <br>
    <br>
    <div class="search-container">
    <input type="search" placeholder="Buscar Nombre">
    <button type="button" class="btn btn-primary">Buscar</button>
    </div>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Animal</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $adopcions as $adopcion )
            <tr>
                <td>{{ $adopcion->animal_id }}</td>
                <td>{{ $adopcion->usuario_id }}</td>
                <td>{{ $adopcion->Fecha }}</td>
                <td>
                    
                <a href="{{ url('/adopcion/'.$adopcion->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a> 
                |
                    
                <form action="{{ url('/adopcion/'.$adopcion->id) }}" class="d-inline" method="post">
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
