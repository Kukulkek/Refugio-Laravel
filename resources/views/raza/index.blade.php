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
    <a href="{{ url('raza/create') }}" class="btn btn-success">Añadir raza</a>
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
                <th>Raza</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $razas as $raza )
            <tr>
                <td>{{ $raza->Raza }}</td>

                <td>
                    
                <a href="{{ url('/raza/'.$raza->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a> 
                |
                    
                <form action="{{ url('/raza/'.$raza->id) }}" class="d-inline" method="post">
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
