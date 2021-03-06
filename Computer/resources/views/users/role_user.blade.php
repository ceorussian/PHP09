<!DOCTYPE html>
<html>
<body>
@extends('layouts.master')
@section('title','Role User')
@section('content')    
@foreach($role as $obj)
    <div class="category">
      <a href="{{ url('role-user/'.$obj->id) }}">{{ $obj->name }}</a>
    </div>
@endforeach     
  <table class="table" style="width:100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    @foreach($role_id as $value)
      <tr>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->phone }}</td>
        <td>{{ $value->address }}</td>
        <td>{{ $value->roles->name }}</td>
        <td>
        	<a href="{{ url('edit-user/'.$value->id) }}"><img src="../img/Edit.png" height="40px" width="40px;"></a>
        	<a href="{{ url('delete-user/'.$value->id) }}"><img src="../img/delete.jpg" height="40px" width="40px;"></a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
	
</body>
</html>