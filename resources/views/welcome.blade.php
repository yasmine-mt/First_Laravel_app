@extends('layouts.app')


@section('title')
 
     Welcome | Laravel Employee App


@endsection




@section('content')

<div class= "container" >
    <div class = "row my-5">
        <div class="class-md-6 mx-auto">
            <div class ="card">
                  <div class=" card-header bg-light">
                      <h3 class="p-2"> Welcome Back </h3>
                  </div>
                  <div class ="card-body"></div>
                  @guest
                <a href="{{url('/login')}}" class="btn btn-outline-primary">
                                    Login
                                </a>
                  @endguest
                  @auth
                  <a href="#" class="btn btn-outline-primary">
                                    Home
                                </a>
                  @endauth
                 
            </div>
        </div>
    </div>
</div>