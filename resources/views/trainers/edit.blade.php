@extends('layouts.app')

@section('title', 'Trainers Edit')  
    
@section('content')
<h1>
   Editar data 
</h1>
<div class="container row">
<div class="col">
  <form class="form-group" method="POST" action="/trainers/{{$trainer->id}}" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
    <input type="text" class="form-control " name="name" value="{{$trainer->name}}">
      </div>
      <div class="form-group">
        <label for="avatar">Avatar</label>
        <input type="file" class=" form-control" name="avatar" >
      </div>
      <button type="submit" class="btn btn-primary mt-5">Editar </button>  
     
</form>
</div>

<form class="form-group" method="POST" action="/trainers/{{$trainer->id}}" >
  @method('DELETE')
  @csrf
 <button type="submit" class="btn btn-danger mt-5">Eliminar </button>
</form>
</div>
@endsection