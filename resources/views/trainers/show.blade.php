@extends('layouts.app')

@section('title', 'Trainers')  
    
@section('content')
@if (session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
@endif
<div class="container text-center">
    <div  class=" mt-2 text-center">
            <div class=" card text-center mt-3" style="width: 18rem; text-aling-center">
            <img src="/images/{{$trainer->avatar}}" class="card-img-top  " alt="" > 
                <div class="">
                <h1>{{$trainer->slug}}</h1>
                  <h5 class="card-title">{{$trainer->name}}</h5>
                  <p class="card-text">{{$trainer->created_at}}</p>
                </div>
            </div>  
    </div>
    <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-primary">Editar</a>

    <form class="form-group" method="POST" action="/trainers/{{$trainer->id}}" >
      @method('DELETE')
      @csrf
     <button type="submit" class="btn btn-primary mt-5">Eliminar </button>
    </form>
</div>
@endsection