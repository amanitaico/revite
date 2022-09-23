@extends('layouts.noside')
@section('content')
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h2 class="home_home">お問い合わせ</h2>

            
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
            </ul>
            </div>
            @endif    

            @if(session('message'))
            {{session('message')}}
            @endif


            <form method="post" action="{{route('contact.confirm')}}" enctype="multipart/form-data">
            @csrf
            
               <div class="form-group">
                    <label for="company"><span class="nes">必須</span>会社名</label>
                    <input type="text" name="company" class="form-control" id="company" placeholder="最大30文字">
                </div>
                
                <div class="form-group">
                    <label for="name"><span class="nes">必須</span>会員名</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="最大30文字">
                </div>


                <div class="form-group">
                    <label for="tel"><span class="nes">必須</span>電話番号</label>
                    <input type="integer" name="tel" class="form-control" id="tel" placeholder="ハイフンなし　半角数字">
                </div>

                <div class="form-group">
                    <label for="email"><span class="nes">必須</span>e-mailアドレス</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="e-mail入力して">
                </div>

                <div class="form-group">
                    <label for="birthdate"><span class="nes">必須</span>生年月日</label>
                    <input type="date" name="birthdate" class="form-control" id="birthdate" >
                </div>

                <div class="form-group">
                    <label for="gender"><span class="nes">必須</span>性別</label><br>
                    <input type="radio" name="gender" class="" id="gender" value="男">男
                    <input type="radio" name="gender" class="" id="gender" value="女">女
                    <input type="radio" name="gender" class="" id="gender" value="その他">その他
                </div>

                <div class="form-group">
                    
                    <label for="profession"><span class="nes">必須</span>職業</label>
                    <select name="profession" class="form-control" id="profession" >
                    <option value="選択してください">選択してください</option>
                    <option value="ニート">ニート</option>
                    <option value="マジシャン">マジシャン</option>
                    <option value="祈祷師">祈祷師</option>
                    <option value="教祖">教祖</option>
                    <option value="詐欺師">詐欺師</option>
                    <option value="女王様">女王様</option>
                    <option value="便利屋">便利屋</option>
                    
                    </select>       
                </div>
                
                <div class="form-group">
                    <label for="content"><span class="nes">必須</span>お問合せ内容</label>
                    <textarea name="content" class="form-control" id="content" placeholder="最大255文字/クレームはお断り"></textarea>
                </div>

                
                <div class="form-group">
                    <input type="hidden" name="situation" class="form-control" id="situation"  >
                </div>

                <button type="submit" class="new_btn btn-flat">確認する</button>
            </form>
        </div>
    </div>
</div>
@endsection
