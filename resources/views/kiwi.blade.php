@extends('layouts.app')
@section('content')
<body>
   <h2 class="nont">none</h2>
   <div class="sky">
    <img src="{{asset('storage/sky.jpg')}}">

    <div class="bird"></div>
    <div class="bird -type_2"></div>
    <div class="bird -type_3"></div>
    
     <div class="kiwi"><a href="{{asset('home')}}"><i class="fa-sharp fa-solid fa-kiwi-bird"></i></a></div>
      <h4 class="kiwi_said"><a href="{{asset('home')}}">DREAM COME TRUE!</a></h4>
     </div>
    
</body>
@endsection