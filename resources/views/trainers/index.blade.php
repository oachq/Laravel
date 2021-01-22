@extends('layouts.app')

@section('title', 'Trainers')  
    
@section('content')

<div class="container">
    <div  class="row mt-1">
    @foreach ($trainers as $trainer)
        <div class="col-sm mt-5">
            <div class="card text-center mt-3" style="width: 18rem;">
            <img src="images/{{$trainer->avatar}}" class="card-img-top"  alt="" > 
                <div class="card-body">
                  <h5 class="card-title">{{$trainer->name}}</h5>
                  <p class="card-text">{{$trainer->created_at}}</p>
                <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-primary">Ver mas...</a>
                </div>
              </div>
         </div>   
     @endforeach
    </div>
   
</div>
@endsection