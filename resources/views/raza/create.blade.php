@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/raza') }}" method="post" enctype="multipart/form-data">
@csrf
@include('raza.form')
</form>
</div>
@endsection
