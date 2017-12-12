@extends('layouts.action_product')
@section('title','Insert Product')
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
  <form class="form-inline" enctype='multipart/form-data' action="{{ url('edit-product/'.$product->id) }}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="email"></label>
    <input type="name" class="form-control" id="name" name ='name' placeholder="Name Product" value="{{ $product->name }}">
    @if($errors->has('name'))
      {{ $errors->first('name') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <textarea class="form-control" id="pwds" name="description">{{ $product->description }} 
    </textarea>
    @if($errors->has('description'))
      {{ $errors->first('description') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="text" class="form-control" id="pwd" name="warranty" placeholder="Warranty Product" value="{{ $product->warranty }}">
    @if($errors->has('warranty'))
      {{ $errors->first('warranty') }}
    @endif
  </div><br><br>
  <div class="form-group">
    <label for="pwd"></label>
    <input type="text" class="form-control" value="{{ $product->price }}" id="pwd" name="price" placeholder="Price Product">
    @if($errors->has('price'))
      {{ $errors->first('price') }}
    @endif
  </div><br><br>
  
  <div class="form-group">
    <input type="text" class="form-control" id="pwd" value="{{ $product->discout }}"   name="discout" placeholder="Discout Product">
    @if($errors->has('discout'))
      {{ $errors->first('discout') }}
    @endif
  </div><br><br>
  <div class="form-group" style="width: 200px">
    <input type="file" name="image">
  </div><br><br>
  <div class="form-group" style="width: 200px">
    <select id="pwd" name="category_id" class="category">
      @foreach($Categories as $value)
      <option value="{{ $value->id }}">{{ $value->name }}</option>
      @endforeach
    </select>
  </div><br><br>
  <button type="submit" id="click" class="btn btn-default">Insert Product</button>
</form>
</div>
@endsection