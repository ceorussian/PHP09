@extends('layouts.center_home')
@section('title','Result Search')
@section('content')
<div class="container">
				<div class="list-product">
					<div class="list-item">
					@foreach($product as $value)
						<div class="item">
							<div class="sale">
								{{ $value->discout."%" }}
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
								<b>{{ number_format($value->price,3) ." VNĐ " }}</b>
							</div>

							<div class="add-to-cart">
								<form action="" method="POST">
									<button><a style="color: orange" href="{{ url('buy/'.$value->id) }}">ADD TO CART</a></button>
								</form>
							</div>
						</div>
						@endforeach

					</div>
					
				</div>
				
			</div>
@endsection