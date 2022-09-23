@extends('layouts.noside')
@section('content')

<h2>入力内容の確認</h2>


<form method="post" action="{{ route('contact.store') }}">
@csrf

<div class="confirm_list_wrap">

   <div class="confirm_list">
     <label><i class="fa-solid fa-key"></i>&ensp;会社名&emsp;&emsp;</label>
     {{ $inputs['company'] }}
     <input name="company" value="{{ $inputs['company'] }}" type="hidden">
   </div>

  <div class="confirm_list">
    <label><i class="fa-solid fa-key"></i>&ensp;名前&emsp;&emsp;</label>
    {{ $inputs['name'] }}
   <input name="name" value="{{ $inputs['name'] }}" type="hidden">
   </div>

  <div class="confirm_list">
    <label><i class="fa-solid fa-key"></i>&ensp;E-メール&emsp;&emsp;</label>
        {{ $inputs['email'] }}
    <input name="email" value="{{ $inputs['email'] }}" type="hidden">
    </div>

    <div class="confirm_list">
        <label><i class="fa-solid fa-key"></i>&ensp;電話番号&emsp;&emsp;</label>
    {{ $inputs['tel'] }}
    <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">
    </div>

    <div class="confirm_list">
    <label><i class="fa-solid fa-key"></i>&ensp;生年月日&emsp;&emsp;</label>
     {{ $inputs['birthdate'] }}
    <input name="birthdate" value="{{ $inputs['birthdate'] }}" type="hidden">
    </div>

    <div class="confirm_list">
    <label><i class="fa-solid fa-key"></i>&ensp;職業&emsp;&emsp;</label>
    {{ $inputs['profession'] }}
    <input name="profession" value="{{ $inputs['profession'] }}" type="hidden">
    </div>

    <div class="confirm_list">
    <label><i class="fa-solid fa-key"></i>&ensp;性別&emsp;&emsp;</label>
     {{ $inputs['gender'] }}
    <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
    </div>

    <div class="confirm_list">
        <label><i class="fa-solid fa-key"></i>&ensp;お問合せ内容&emsp;&emsp;</label>
         {!! nl2br(e($inputs['content'])) !!}
          <input name="content" value="{{ $inputs['content'] }}" type="hidden">
    </div>

    <div class="confirm_list">
          <input name="situation" value="{{ $inputs['situation'] }}" type="hidden">
    </div>

</div>


<div class="btn_wrap">

<button type="button" class="confirm_btn1  btn-flat" onclick="history.back()">&lt; 内容修正</button>
<button type="submit" class="confirm_btn2  btn-flat" name="action" value="submit">送信</button>

</div>
</form>
@endsection