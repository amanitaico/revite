@extends('layouts.app')
@section('content')

<h2> お問い合わせ一覧</h2>

@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif

<table class="list_table_box">
  <thead>
    
    <tr>
      <th>編集</th>
      <th>ステータス</th>
      <th>会社名</th>
      <th>名前</th>
      <th>電話番号</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($contacts as $contact)
    <tr>
         <td class="edit_btn"><a href="{{route('contact.edit',$contact)}}"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a></td>
         
         <td>@if($contact->situation===null)未対応@endif{{$contact->situation}}</td>
         <td>{{ $contact->company }} </td>
         <td>{{ $contact->name }} </td>
         <td>{{ $contact->tel }} </td>
         
    </tr> 
    @endforeach
  </tbody>
</table>

<div class="pagination">{{ $contacts->links('vendor.pagination.custom') }}</div>
@endsection