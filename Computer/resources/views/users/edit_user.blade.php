@extends('layouts.action_product')
@section('title','Edit User')
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
		width: 200%;
	}
	#pwds{
		height: 200px;
		width: 210%;
	}
	#click{
		margin-left: 150px;
	}
	.form-group{
		width: 210px;
	}
</style>
<div class="addproduct">
	<form class="form-inline" action="" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="email"></label>
    <input type="name" class="form-control" id="name" name ='name' value="{{ $user->name }}" placeholder="Your Name !">
    @if($errors->has('name'))
    {{ $errors->first('name') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="email" class="form-control" value="{{ $user->email }}" id="pwd" name="email" placeholder="Your Email !">
    @if($errors->has('email'))
    {{ $errors->first('email') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="password" class="form-control" id="pwd" value="{{ $user->password }}" name="password" placeholder="Your Password">
    @if($errors->has('password'))
    {{ $errors->first('password') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="text" class="form-control" id="pwd" value="{{ $user->phone }}" name="phone" placeholder="Your Phone">
    @if($errors->has('phone'))
    {{ $errors->first('phone') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="text" class="form-control" id="pwd" value="{{ $user->address }}" name="address" placeholder="Your Address">
    @if($errors->has('address'))
    {{ $errors->first('address') }}
    @endif
  </div><br><br>
  <div class="form-group" style="width: 200px">
    <select id="pwd" name="role_id" class="category" >
    	@foreach($role_id as $value)
    	<option value="{{ $user->role_id }}">{{ $value->name }}</option>
    	@endforeach
    </select>
  </div><br><br>
  <button type="submit" id="click" class="btn btn-default">Insert User</button>
</form>
</div>
@endsection
