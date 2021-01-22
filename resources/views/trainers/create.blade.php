@extends('layouts.app')

@section('title', 'Trainers Create')  
    
@section('content')
<h1>
    Hellow world, TEXLAVE
</h1>    
@if ($errors -> any())
<div class="alert alert-danger">
@foreach ($errors->all() as $err)
    <p>{{$err}} </p>    
@endforeach
</div>
@endif
<div class="container">

 @include('trainers.form')
<!-- se agrego la plantilla del formulario del archivo form.blade.php-->
</div>
@endsection