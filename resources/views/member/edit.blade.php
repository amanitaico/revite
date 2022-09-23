@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h2 class="home_home">編集画面</h2>

           
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


            <form method="post" action="{{route('member.update', $member)}}" >
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name"><span class="nes">必須</span>会員名</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="最大30文字" value="{{old('name', $member->name)}}">
                </div>

                <div class="form-group">
                    <label for="kana"><span class="nes">必須</span>カナ</label>
                    <input type="text" name="kana" class="form-control" id="kana" placeholder="最大30文字" value="{{old('kana', $member->kana)}}">
                </div>

                <div class="form-group">
                    <label for="email"><span class="nes">必須</span>e-mailアドレス</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="e-mail入力して" value="{{old('email', $member->email)}}">
                </div>

                <div class="form-group">
                    <label for="password"><span class="nes">必須</span>パスワード</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="８文字以上" value="{{old('password', $member->password)}}">
                </div>

                <div class="form-group">
                    <label for="tel"><span class="nes">必須</span>電話番号</label>
                    <input type="integer" name="tel" class="form-control" id="tel" placeholder="ハイフンなし　半角数字" value="{{old('tel', $member->tel)}}">
                </div>

                <div class="form-group">
                    <label for="zip"><span class="nes">必須</span>郵便番号</label>
                    <input type="integer" name="zip" class="form-control" id="zip" placeholder="ハイフンなし　半角数字" value="{{old('zip', $member->zip)}}">
                </div>

                <div class="form-group">
                    <label for="prefecture"><span class="nes">必須</span>都道府県</label>
                    <input type="text" name="prefecture" class="form-control" id="prefecture" placeholder="都道府県入力して" value="{{old('prefecture', $member->prefecture)}}">
                </div>

                <div class="form-group">
                    <label for="adress"><span class="nes">必須</span>住所</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="市区町村/最大30文字" value="{{old('address', $member->address)}}">
                </div>

                <div class="form-group">
                    <label for="adress2"><span class="nes">必須</span>住所2</label>
                    <input type="text" name="address2" class="form-control" id="address2" placeholder="番地・屋号/最大50文字" value="{{old('address2', $member->address2)}}">
                </div>

                <div class="form-group">
                    <label for="memo">備考</label>
                    <textarea name="memo" class="form-control" id="memo" placeholder="最大255文字" >{{old('memo', $member->memo)}}</textarea>
                </div>




                <button type="submit" class="new_btn btn-flat edit_btn2">更新 </button>
            </form>
        </div>
    </div>
</div>
@endsection