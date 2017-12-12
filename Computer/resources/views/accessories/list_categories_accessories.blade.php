@extends('layouts.master')
@section('title','List Categories Accessories')
@section('content')

	<table class="table" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name Categories Accessories</th>
      </tr>
    </thead>
    @foreach($category_accessories as $value)
      <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->name }}</td>
        <td>
        	<a href="{{ url('edit-category-accessories/'.$value->id) }}"><img src="img/Edit.png" height="40px" width="40px;"></a>
        	<a href="{{ url('delete-category-accessories/'.$value->id) }}"><img src="img/delete.jpg" height="40px" width="40px;"></a>
        </td>
      </tr>
    @endforeach
  </table>

@endsection