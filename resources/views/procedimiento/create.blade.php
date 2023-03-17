@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/procedimiento') }}" method="post" enctype="multipart/form-data">
@csrf
@include('procedimiento.form')
</form>
</div>
@endsection
