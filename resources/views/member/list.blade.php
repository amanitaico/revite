@extends('layouts.app')
@section('content')

<h2>MEMBERS</h2>
<button type="submit" class="new_btn btn-flat"><a href="{{route('member.create')}}"><i class="fa-sharp fa-solid fa-user-plus"></i>&emsp;NEW </a></button>
            
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif

<table class="list_table_box">
  <thead>
    <tr>
      <th>EDIT</th>
      <th>NAME</th>
      <th>E-MAIL</th>
      <th>PHONE</th>
      <th>PREFECTURE</th>
      <th>ADDRESS</th>
      <th>ADDRESS2</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($members as $member)
    <tr>
         <td class="edit_btn"><a href="{{route('member.edit',$member)}}"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a></td>
         <td>{{ $member->name }} </td>
         <td>{{ $member->email }} </td>
         <td>{{ $member->tel }} </td>
         <td>{{ $member->prefecture }} </td>
         <td>{{ $member->address }} </td>
         <td>{{ $member->address2 }} </td>
    </tr> 
    @endforeach
    
   
  </tbody>

</table>
<div class="pagination">{{ $members->links('vendor.pagination.custom') }}</div>
<!-- -->
@endsection