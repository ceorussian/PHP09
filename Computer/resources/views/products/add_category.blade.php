@extends('layouts.master')
@section('title','Add Category Product')
@section('content')
<h2 style="color: orange">Add Category Product</h2><br><br>
<form class="form-inline" method="post" action="{{ route('insert_category') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  	<div class="form-group">
   		 <input type="text" name="name" class="form-control" id="email" placeholder="Name Category Product">
  	</div><br><br>
  	<button type="submit" class="btn btn-default">Add</button>
</form>
@endsection