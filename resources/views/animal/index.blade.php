@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ url('animal/create') }}">Añadir animal</a>
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
                    <img src="{{ asset('storage').'/'.$animal->Foto }}" alt="">
                </td>
                <td>{{ $animal->Especie }}</td>
                <td>{{ $animal->Raza }}</td>
                <td>{{ $animal->Nombre }}</td>
                <td>{{ $animal->Sexo }}</td>
                <td>
                    
                <a href="{{ url('/animal/'.$animal->id.'/edit') }}">
                    Editar
                </a> 
                |
                    
                <form action="{{ url('/animal/'.$animal->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
