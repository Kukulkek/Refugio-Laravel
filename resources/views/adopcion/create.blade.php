@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/adopcion') }}" method="post" enctype="multipart/form-data">
@csrf
@include('adopcion.form')
</form>
</div>
@endsection
