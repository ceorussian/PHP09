<header>
	<div class="top-line">
		<div class="container">
			<div class="call" title="Call Us">
				<i class="fa fa-phone fa-3x" aria-hidden="true"></i>
				<span>01659.423.493</span>
			</div>
			<nav class="user_login">
				<ul>
					<li class="register">
						<a href="{{ url('register-member') }}" title="Register">
							<i class="fa fa-registered fa-2x" aria-hidden="true"></i>
						</a>
					</li>
					<li class="login">
						<a href="{{ url('login_customer') }}" title="Login">
							<i class="fa fa-key fa-2x" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="mid-line">
		<div class="container">
			<div id="logo" class="logo">
				<a href="{{ url('index') }}" title="Home"><span>Computer</span>Store</a>
			</div>
			<div class="search" title="Search">
				<div class="border-search">
					<form action="{{ url('seach-product') }}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input style="width: 400px;" type="text" placeholder="Search name or price of product" name="search">
					<input type="submit" value="Seach">
					</form>
				</div>
			</div>
			<div class="check">
				<div class="box-wishlist" title="Wish List">
					<a href="#">
						<i class="material-icons">favorite_border<b> 0</b></i>
					</a>
				</div>
				<div class="box-cart" title="Cart" style="margin-left: 20px">
					<a href="{{ url('cart') }}">
						<i class="material-icons">shopping_cart<b> {{ $totail }}</b></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>