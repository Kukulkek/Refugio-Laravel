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
    <a href="{{ url('tratamiento/create') }}" class="btn btn-success">Añadir tratamiento</a>
    <div class="search-container">
    <input type="text" placeholder="Buscar Nombre">
    <button type="button">Buscar</button>
    </div>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Animal</th>
                <th>Nombre Tratamiento</th>
                <th>Fecha</th>
                <th>Veterinario</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $tratamientos as $tratamiento )
            <tr>
                <td>{{ $tratamiento->id }}</td>

                <td>{{ $tratamiento->animal_id }}</td>
                <td>{{ $tratamiento->Nombre }}</td>
                <td>{{ $tratamiento->Fecha }}</td>
                <td>{{ $tratamiento->Veterinario }}</td>
                <td>
                    
                <a href="{{ url('/tratamiento/'.$tratamiento->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a> 
                |
                    
                <form action="{{ url('/tratamiento/'.$tratamiento->id) }}" class="d-inline" method="post">
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
