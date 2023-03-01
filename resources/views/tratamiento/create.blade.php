@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/tratamiento') }}" method="post" enctype="multipart/form-data">
@csrf
@include('tratamiento.form')
</form>
</div>
@endsection
