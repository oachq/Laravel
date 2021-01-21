@extends('layouts.app')

@section('title', 'Trainers Create')  
    
@section('content')
<h1>
    hellow world from my first view.
</h1>
<div class="container">
    <form class="form-group" method="POST" action="/trainers"> 
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control " name="name" >
          </div>
          <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>
   
</div>
@endsection