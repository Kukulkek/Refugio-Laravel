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
    <a href="{{ url('animal/create') }}" class="btn btn-success">Añadir animal</a>
    <div class="search-container">
    <input type="text" placeholder="Buscar Nombre">
    <button type="button">Buscar</button>
    </div>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $animals as $animal )
            <tr>
                <td>{{ $animal->id }}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$animal->Foto }}" width="100" alt="">
                </td>
                <td>{{ $animal->Especie }}</td>
                <td>{{ $animal->Raza }}</td>
                <td>{{ $animal->Nombre }}</td>
                <td>{{ $animal->Sexo }}</td>
                <td>
                    
                <a href="{{ url('/animal/'.$animal->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a> 
                |
                    
                <form action="{{ url('/animal/'.$animal->id) }}" class="d-inline" method="post">
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
