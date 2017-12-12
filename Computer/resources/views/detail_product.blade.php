@extends('layouts.center_home')
@section('title','Detail Product')
@section('content')
	<section id="view-product">
			<div class="container">
				<div class="product">
					<div class="image">
						<img src="{{ asset('img/'.$product->image) }}">
					</div>
					<div class="sel">
						<h1>{{ $product->name }}</h1>						
						<p><b>Description :</b> {{ $product->description }}</p>
						<p class="cost"><b>Price : </b>{{ number_format($product->price,3) }} VNĐ</p>
						<p class="discount"><b>Discount:</b> {{ $product->discout }}%.</p>
						
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="quantity">
							<span class="total-price">Total price: $120.00.</span>
							</div>
							<div class="add-cart">
								<button class="add-cart-btn" type="submit"><a href="{{ url('buy/'.$product->id) }}">Add to cart</button></a>
							</div>
						</form>
					</div>					
				</div>

				<div class="suggestions">
					<h2>Other Product</h2>
					<div class="list-item">
					@foreach($category_product as $value)
						<div class="item">
							<div class="sale">
								SALE
							</div>
							<div class="new">
								NEW
							</div>
							<div class="image">
								<a href="{{ url('detail_product/'.$value->id) }}"><img src="{{ asset('img/'.$value->image) }}" height="200px" width="200px"></a>
							</div>
							<div class="name">
								<a href=""><b>{{ $value->name }}</b></a>
							</div>
							<div class="price">
								<b>{{ number_format($value->price,3) }} VNĐ</b>
							</div>
							<div class="add-to-cart">
								<form action="" method="POST">
									<button><a href="{{ url('buy/'.$value->id) }}">ADD TO CART</a></button>
								</form>
							</div>
						</div>
					@endforeach	
					</div>
				</div>
			</div>
		</section>

@endsection