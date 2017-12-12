<!DOCTYPE html>
<html>
<body>
@extends('layouts.master')
@section('title','List Product')
@section('content')
<div class="menu">
  @foreach($category as $obj)
    <div class="category">
      <a href="{{ url('categories-product/'.$obj->id) }}">{{ $obj->name }}</a>
    </div>
  @endforeach
</div>   
  <table class="table" style="width:100%">
    <thead>
      <tr>
        <th>ProductName</th>
        <th>Product_category_id</th>
        <th>Image</th>
        <th>Description</th>
        <th>Warranty</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Action</th>
      </tr>
    </thead>
    @foreach($product as $value)
      <tr>
        <td>{{ $value->name }}</td>
        <td>{{ $value->category->name }}</td>
        <td><img src="img/{{ $value->image }}" height="60px" width="100px"></td>
        <td>{{ $value->description }}</td>
        <td>{{ $value->warranty }}{{ " Month " }}</td>
        <td>{{ $value->price }}{{ " $ " }}</td>
        <td>{{ $value->discout }}{{ " % " }}</td>
        <td>
        	<a href="{{ url('edit-product/'.$value->id) }}"><img src="img/Edit.png" height="40px" width="40px;"></a>
        	<a href="{{ url('delete-product/'.$value->id) }}"><img src="img/delete.jpg" height="40px" width="40px;"></a>
        </td>
      </tr>
    @endforeach

  </table>
  {{ $product->links() }}
@endsection
	
</body>
</html>