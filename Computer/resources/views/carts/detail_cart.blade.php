@extends('layouts.master')
@section('title','View Detail Cart')
@section('content')
	<table class="table" style="width:100%">
    <thead>
      <tr class="tieude">
        <th>STT</th>
        <th>Cart Orderer</th>
        <th>Name Product</th>
        <th>Quantity Product</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php $i = 0; ?>
   	@foreach($cart_detail as $value)
    <?php $i++; ?>
      <tr style="text-align: center;">
        <td>{{ $i }}</td> 
        <td>{{ $value->cart->user->name }}</td> 
        <td>{{ $value->product_id}}</td>
        <td>{{ $value->quanlity }}</td>
        <td>{{ number_format($value->price,3) }} VNĐ</td>
        <td>
        	<a href=""><img src="{{ asset('img/delete.jpg') }}" height="30px" width="40px;"></a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection