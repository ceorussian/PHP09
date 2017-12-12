@extends('layouts.master')
@section('title','Edit Category Product')
@section('content')
<h2 style="color: orange">Add Category Product</h2><br><br>
<form class="form-inline" method="post" action="{{ route('edit_category') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  	<div class="form-group">
  		<input type="hidden" name="id" value="{{ $category->id }}">
   		 <input type="text" name="name" class="form-control" id="email"  value="{{ $category->name }}">
  	</div><br><br>
  	<button type="submit" class="btn btn-default">Add</button>
</form>
@endsection