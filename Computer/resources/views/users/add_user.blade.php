@extends('layouts.action_product')
@section('title','Add User')
@section('content')
<style type="text/css">
	.addproduct{
		width: 100%;
		margin:auto;
		margin-top: 20px;
		padding-left: 35%;
	}
	body{
		color: white;
	}
	.category{
		color: black;
		width: 200px;
		height: 40px;
	}
	#name ,#pwd{
		width: 100%;
	}
	#pwds{
		height: 200px;
		width: 100%;
	}
	#click{
		margin-left: 150px;
	}
	.form-group,#pwd{
		width: 400px;
	}
</style>
<div class="addproduct">
	<form class="form-inline" enctype='multipart/form-data' action="{{ route('insert_user') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="email"></label>
    <input type="name" class="form-control" id="name" name ='name' placeholder="Your Name !">
    @if($errors->has('name'))
    {{ $errors->first('name') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="email" class="form-control" id="pwd" name="email" placeholder="Your Email !">
    @if($errors->has('email'))
    {{ $errors->first('email') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Your Password">
    @if($errors->has('password'))
    {{ $errors->first('password') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="text" class="form-control" id="pwd" name="phone" placeholder="Your Phone">
    @if($errors->has('phone'))
    {{ $errors->first('phone') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="text" class="form-control" id="pwd" name="address" placeholder="Your Address">
    @if($errors->has('address'))
    {{ $errors->first('address') }}
    @endif
  </div><br><br>
  <div class="form-group" style="width: 200px">
    <select id="pwd" name="role_id" class="category">
    	@foreach($role_id as $value)
    	<option value="{{ $value->id }}">{{ $value->name }}</option>
    	@endforeach
    </select>
  </div><br><br>
  <button type="submit" id="click" class="btn btn-default">Insert User</button>
</form>
</div>
@endsection
