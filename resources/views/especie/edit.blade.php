@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/especie/'.$especie->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('especie.form');

</form>
</div>
@endsection