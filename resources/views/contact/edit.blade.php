@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
             <h2 class="home_home">お問合せ内容編集</h2>

           
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


             <form method="post" action="{{route('contact.update',$contact)}}" >
            @csrf
            @method('PUT')
          
          
            <div class="contact_list_wrap">
              
         
                    <h5 >ステータス</h5> 
                      <select name="situation"  class="contact_select">
                        <option value="未対応">&emsp;未対応&emsp;</option>
                        <option value="対応中">&emsp;対応中&emsp;</option>
                        <option value="対応済">&emsp;対応済&emsp;</option>
                      </select>  
                 

                    <h5>お問合せ内容</h5>
                      <div class="contact-group">
                         {!!nl2br(e($contact->content))!!}
                         
                      </div>
                 
            
                    <h5>備考</h5>
                       <textarea name="memo" cols="40" rows="7" class="form-control" id="memo" ></textarea>
              
                
                    <h5>お問合せ情報</h5>

                      <div class="contact-group">
                         <div>会社名:&emsp;&emsp;{{$contact->company}}</div>

                         <div>名前:&emsp;&emsp;&emsp;{{$contact->name}}</div>
                         
                         <div>電話番号:&emsp;{{$contact->tel}}</div>
                         
                         <div>Eメール:&emsp;&ensp;{{$contact->email}}</div>
                        
                         <div>生年月日:&emsp;{{$contact->birthdate}}</div>
                         
                         <div>職業:&emsp;&emsp;&emsp;{{$contact->profession}}</div>
                         
                         <div>性別:&emsp;&emsp;&emsp;{{ $contact->gender}}</div>
                      </div>  

                     
                     <button type="submit" class="new_btn btn-flat edit_btn2">更新する </button>
                     

                   </div>
               </form>  
        </div>
    </div>
</div>
@endsection