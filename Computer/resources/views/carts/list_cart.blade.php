@extends('layouts.master')
@section('title','List Order')
@section('content')
<style type="text/css">
	.tieude th{
		text-align: center;
	}
</style>
	<table class="table" style="width:100%">
    <thead>
      <tr class="tieude">
        <th>ID</th>
        <th>Orderer</th>
        <th>Total Product</th>
        <th>Total Price</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Created Order</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php $i=0; ?>
    @foreach($cart as $value)
    <?php $i++; ?>
      <tr style="text-align: center;">
        <td>{{ $i }}</td>
        <td><a href="{{ url('detail-order/'.$value->id) }}">{{ $value->user->name }}</a></td>
        <td>{{ $value->total_product }}</td>
        <td>{{ number_format($value->quanlity_price,3) }} VNĐ</td>
        <td>{{ $value->user->phone }}</td>
        <td>{{ $value->user->address }}</td>
        <td>{{ $value->created }}</td>
        <td>
        	<a href=""><img src="img/delete.jpg" height="30px" width="40px;"></a>
        </td>
      </tr>
    @endforeach

  </table>
@endsection