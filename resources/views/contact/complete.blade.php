@extends('layouts.noside')
@section('content')
<h2>送信完了</h2>

<div class="thanks">お問合せありがとうございます<br>ご登録のメールアドレスに確認メールをお送りしました</div>



<a href="{{route('home')}}" class="backtohome"><i class="fa-sharp fa-solid fa-house complete_home"></i>&emsp;Back to home</a>

   
@endsection