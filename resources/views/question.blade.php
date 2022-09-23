@extends('layouts.app')
@section('content')

<div class="question_body">

  <div class="Q1 q_base">
  <a href="{{asset('question_list#github')}}">GitHub</a>
  </div>


  <div class="Q2 q_base">
  <a href="{{asset('question_list#layout')}}">layout</a>
  </div>

  <div class="Q3 q_base">
  <a href="{{asset('question_list#mvc')}}">MVC</a>
  </div>

  <div class="Q4 q_base">
  <a href="{{asset('question_list#routes')}}">routes</a>
  </div>

  <div class="Q5 q_base">
  <a href="{{asset('question_list#resource')}}"><br>resource Controller</a>
  </div>

  <div class="Q6 q_base">
  <a href="{{asset('question_list#revite')}}"><br>revite</a>
  </div>

  <div class="Q7 q_base">
  <a href="{{asset('question_list#gdatabase')}}"><br>Database</a>
  </div>

</div>  
@endsection