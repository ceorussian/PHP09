<?php 
	include_once "template/head.php";
?>
<body>
	<div id="page">
		<?php 
			include_once "template/header.php";
			include_once "template/top-menu.php";
		?>
		<div class="container">
			<div class="path">
				<ul class="breadcrumb"> 
					<li>
						<a href="#">
							<i class="material-icons">home</i>
						</a>
					</li>
					<li>
						<i class="material-icons">keyboard_arrow_right</i>
						<a href="#">Cart</a>
					</li>
					<li>
						<i class="material-icons">keyboard_arrow_right</i>
						<span>View Carts</span>
					</li>
				</ul>
			</div>
			<section id="view-cart">
				<h2>
					<i class="material-icons">shopping_cart</i>
					<span>SHOPPING CART</span>
				</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<table>
						<thead>
							<tr>
								<td>Image</td>
								<td>Product Name</td>
								<td>Quantity</td>
								<td>Unit Price</td>
								<td>Total</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div>
										<a href="#">
											<img src="public/images/product.png" class="image-product">
										</a>
									</div>
								</td>
								<td>
									<a href="#" class="productName">Asus MAXIMUS VII HERO</a>
									<br>
									<small>
										<strong>Model: </strong><span>IV2</span><br>
									</small>
									<small>
										<strong>Size: </strong><span>Large</span>
										<br>
									</small>
									<small>
										<strong>Color: </strong><span>Red</span>
									</small>
								</td>
								<td>
									<div class="quantity">
										<button class="plus">
											<i class="material-icons">add</i>
										</button>
										<input type="number" name="quantity" min="1" value="1">
										<button class="minus">
											<i class="material-icons">remove</i>
										</button>
									</div>
								</td>
								<td>$12.00</td>
								<td>$12.00</td>
								<td>
									<button class="delete">
										<i class="material-icons">delete</i>
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<div>
										<a href="#">
											<img src="public/images/product.png" class="image-product">
										</a>
									</div>
								</td>
								<td>
									<a href="#" class="productName">Asus MAXIMUS VII HERO</a>
									<br>
									<small>
										<strong>Model: </strong><span>IV2</span><br>
									</small>
									<small>
										<strong>Size: </strong><span>Large</span>
										<br>
									</small>
									<small>
										<strong>Color: </strong><span>Red</span>
									</small>
								</td>
								<td>
									<div class="quantity">
										<button class="plus">
											<i class="material-icons">add</i>
										</button>
										<input type="number" name="quantity" min="1" value="1">
										<button class="minus">
											<i class="material-icons">remove</i>
										</button>
									</div>
								</td>
								<td>$12.00</td>
								<td>$12.00</td>
								<td>
									<button class="delete">
										<i class="material-icons">delete</i>
									</button>
								</td>
							</tr>
							<tr>
								<td>
									<div>
										<a href="#">
											<img src="public/images/product.png" class="image-product">
										</a>
									</div>
								</td>
								<td>
									<a href="#" class="productName">Asus MAXIMUS VII HERO</a>
									<br>
									<small>
										<strong>Model: </strong><span>IV2</span><br>
									</small>
									<small>
										<strong>Size: </strong><span>Large</span>
										<br>
									</small>
									<small>
										<strong>Color: </strong><span>Red</span>
									</small>
								</td>
								<td>
									<div class="quantity">
										<button class="plus">
											<i class="material-icons">add</i>
										</button>
										<input type="number" name="quantity" min="1" value="1">
										<button class="minus">
											<i class="material-icons">remove</i>
										</button>
									</div>
								</td>
								<td>$12.00</td>
								<td>$12.00</td>
								<td>
									<button class="delete">
										<i class="material-icons">delete</i>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="total-checkout">
						<strong>Total: $123.00</strong>
					</div>
					<div class="checkout-pos">
						<div class="shopping">
							<button>Continue Shopping</button>
						</div>
						<div class="checkout">
							<button>Checkout</button>
						</div>
					</div>
				</form>
			</section>			
		</div>
		<?php
			include_once "template/footer.php";
		 ?>
	</div>
	
</body>
</html>