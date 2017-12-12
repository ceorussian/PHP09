@extends('layouts.master')
@section('title','List Accessories Of Category')
@section('content')
<table class="table" style="width:100%">
@foreach($category_accessories as $obj)
    <div class="category">
      <a href="{{ url('category_accessories/'.$obj->id) }}">{{ $obj->name }}</a>
    </div>
@endforeach
    <thead>
      <tr>
        <th>ID</th>
        <th>Name Accessories</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Category_id</th>
        <th>Action</th>
      </tr>
    </thead>
    @foreach($accessories as $value)
      <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->description }}</td>
        <td>{{ $value->price }}</td>
        <td><img src="{{ asset('img/linhkien/'.$value->image) }}" height="60px" width="100px"></td>
        <td>{{ $value->category->name }}</td>
        <td>
        	<a href="{{ url('edit-accessories/'.$value->id) }}"><img src="{{ asset('img/Edit.png') }}" height="40px" width="40px;"></a>
        	<a href="{{ url('delete-accessories/'.$value->id) }}"><img src="{{ asset('img/delete.jpg') }}" height="40px" width="40px;"></a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection