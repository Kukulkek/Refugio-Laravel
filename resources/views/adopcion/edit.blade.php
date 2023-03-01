@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/adopcion/'.$adopcion->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('adopcion.form');

</form>
</div>
@endsection