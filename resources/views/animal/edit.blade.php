@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/animal/'.$animal->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('animal.form');

</form>
</div>
@endsection