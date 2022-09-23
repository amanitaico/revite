@extends('layouts.app')
@section('content')



@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif

<h2 class="home_home">HOME</h2>

<div class="home_list">
 <h1><a href="{{asset('kiwi')}}"><i class="fa-sharp fa-solid fa-kiwi-bird"></i></a></h1>
 <h4><a href="{{asset('kiwi')}}">I WANT TO FLY</a></h4>

</div>

@endsection
