@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/animal') }}" method="post" enctype="multipart/form-data">
@csrf
@include('animal.form')
</form>
</div>
@endsection
