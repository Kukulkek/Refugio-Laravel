@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <h1 class="d-inline-block">
    <a href="{{ url('animal/create') }}" class="btn btn-success">Añadir animal</a>
    <a href="{{ url('especie') }}" class="btn btn-success">Especie</a>
    <a href="{{ url('raza') }}" class="btn btn-success">Raza</a>
     </h1>
    <h1 class="d-inline-block">
        Busqueda por Nombre
    </h1>
     <h1 class="d-inline-block">
        {{ Form::open(['route'=> 'animal.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
            <div class="form-group d-inline-block">
                {{ Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
            </div>  
            <div class="form-group d-inline-block">
                <button type="submit" class="btn btn-secondary">Buscar
                </button>
            </div>
        {{ Form::close() }}
        </h1>
    
            </div>
        </div>
    </div>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
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
                <td>
                    <img src="{{ asset('storage').'/'.$animal->Foto }}" width="100" alt="">
                </td>
                <td>{{ $animal->especie->Especie }}</td>
                <td>{{ $animal->raza->Raza }}</td>
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
