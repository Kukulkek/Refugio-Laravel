@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/procedimiento/'.$procedimiento->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('raza.form');

</form>
</div>
@endsection