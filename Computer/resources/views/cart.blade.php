@extends('layouts.center_home')
@section('title','Cart of your')
@section('content')
<style type="text/css">
    .cart{
        width: 1024px;
        margin: auto;
    }
	.tru ,.cong{
		width: 30px;
		margin-left: 5px;
		margin-right: 5px;	
		background-color: orange;
		color: white;
		font-weight: bold;
	}
	.tru:hover ,.cong:hover{
		background-color: gray;
	}
    .order{
        text-decoration: none;
        color: orange;
    }
    .table{
        margin-top: 20px;
        text-align: center;
        
        width: 100%;
        
    }
    
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    // $(document).ready(function() {
    //     $('.cong').on('click', function() {
    //         var id = $(this).attr('target-id');
    //         var quantity = $('#qt-'+id+'').text();
    //         var price = $('#pr-'+id+'').text();
    //         var totail = $('#tt-'+id+'').text();
    //         var newQuantity = parseInt(quantity) + 1;
    //         $('#qt-'+id+'').html(newQuantity);
    //         var sumMoney = parseInt(price)+parseInt(totail);
    //         $('#tt-'+id+'').html(sumMoney);

    //     });
    //     $('.tru').on('click', function() {
    //         var id = $(this).attr('target-id');
    //         var quantity = $('#qt-'+id+'').text();
    //         var price = $('#pr-'+id+'').text();
    //         var totail = $('#tt-'+id+'').text();
    //         var newQuantity = parseInt(quantity) - 1;
    //         if(newQuantity < 1) {
    //           newQuantity = 1;
    //         }
    //         $('#qt-'+id+'').html(newQuantity);
    //         var sumMoney = parseInt(totail)-parseInt(price);
    //         $('#tt-'+id+'').html(sumMoney);
    //     });
    // });
</script>
<div class="cart">

<table class="table">
      <tr>
        <th style="text-align: center;">STT</th>
        <th style="text-align: center;">Name Product</th>
        <th style="text-align: center;">Image</th>
        <th style="text-align: center;">Price</th>
        <th style="text-align: center;">Quantity</th>
        <th style="text-align: center;">Total Money</th>
        <th style="text-align: center;">Action</th>
      </tr>
	<tbody>
	<?php 
  $i = 0;
	$sum = 0;
	 ?>
	@foreach($list_cart as $value)
	<?php $i++; ?>
      <tr>
      	<td>{{ $i }}</td>
        <td>{{ $value->name }}</td>
        <td><img src="{{ asset('img/'.$value->options->image) }} " height="60px" width="60px"></td>
        <td>{{ number_format(($value->price),3) }} VNĐ</td>	
        <td>
        {{ $value->qty }}
        </td>
        <td>{{ number_format(($value->qty * $value->price),3) }} VNĐ</td>
        <td><a href="{{ url('delete-cart/'.$value->rowId) }}"><img src="{{ asset('img/delete.jpg') }}" height="40px " width="40px"></a></td>
      </tr>
      <?php 
      	$sum += $value->qty * $value->price;
      ?>
    @endforeach
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="a"><b>Total Money : {{number_format($total,3) }}</b>VNĐ</td>
        <td><a href="{{ url('order') }}"><button type="button" class="btn btn-danger">Order</button></a> </td>
      </tr>
    </tbody>
	
		
</table>
    
</div>

@endsection