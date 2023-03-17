@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/especie') }}" method="post" enctype="multipart/form-data">
@csrf
@include('especie.form')
</form>
</div>
@endsection
