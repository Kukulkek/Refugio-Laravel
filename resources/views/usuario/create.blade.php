@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data">
@csrf
@include('usuario.form')
</form>
</div>
@endsection
