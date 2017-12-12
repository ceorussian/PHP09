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
						<a href="#">Product</a>
					</li>
					<li>
						<i class="material-icons">keyboard_arrow_right</i>
						<span>Details</span>
					</li>
				</ul>
			</div>				
		</div>
		<section id="view-product">
			<div class="container">
				<div class="product">
					<div class="image">
						<img src="public/images/product.png">
					</div>
					<div class="sel">
						<h1>LOGITECH KEYBOARD K480</h1>						
						<p>Comfort is a very important thing nowadays because it is a condition of satisfaction and calmness. It is clear that our way of life must be as comfortable as possible. Home electronics satisfy our wishes and make our life more pleasant. We must admit that our way of life depends on quality of different goods of popular brands. Many of our clients were surprised by the incredible assortment of products in our store. You know, we have many devoted customers all over the world, and this fact proves that we sell only quality commodities. Recipe of our success is a fair price and premium quality. We understand that it is very complicated to amaze present clients, they are so whimsical, but our products are very flexible and reliable.</p>
						<p class="cost">Cost: $30.00.</p>
						<p class="discount">Discount: 10%.</p>
						<p class="price">Price current: $27.00.</p>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="quantity">
								<input type="text" name="quantity">
								<span>
									<button class="plus">
										<i class="material-icons">add</i>
									</button>
									<button class="minus">
										<i class="material-icons">remove</i>
									</button>
								</span>
								<span class="total-price">Total price: $120.00.</span>
							</div>
							<div class="add-cart">
								<button class="add-cart-btn" type="submit">Add to cart</button>
							</div>
						</form>
					</div>					
				</div>

				<div class="suggestions">
					<h2>SUGGESTIONS</h2>
					<div class="list-item">
						<div class="item">
							<div class="sale">
								SALE
							</div>
							<div class="new">
								NEW
							</div>
							<div class="image">
								<img src="public/images/product.png">
							</div>
							<div class="name">
								<a href=""><b>Asus MAXIMUS VII HERO</b></a>
							</div>
							<div class="price">
								<b>123.22 $</b>
							</div>
							<div class="add-to-cart">
								<form action="" method="POST">
									<button>ADD TO CART</button>
								</form>
							</div>
						</div>
						<div class="item">
							<div class="sale">
								SALE
							</div>
							<div class="new">
								NEW
							</div>
							<div class="image">
								<img src="public/images/product.png">
							</div>
							<div class="name">
								<a href=""><b>Asus MAXIMUS VII HERO</b></a>
							</div>
							<div class="price">
								<b>123.22 $</b>
							</div>
							<div class="add-to-cart">
								<form action="" method="POST">
									<button>ADD TO CART</button>
								</form>
							</div>
						</div>
						<div class="item">
							<div class="sale">
								SALE
							</div>
							<div class="new">
								NEW
							</div>
							<div class="image">
								<img src="public/images/product.png">
							</div>
							<div class="name">
								<a href=""><b>Asus MAXIMUS VII HERO</b></a>
							</div>
							<div class="price">
								<b>123.22 $</b>
							</div>
							<div class="add-to-cart">
								<form action="" method="POST">
									<button>ADD TO CART</button>
								</form>
							</div>
						</div>
						<div class="item">
							<div class="sale">
								SALE
							</div>
							<div class="new">
								NEW
							</div>
							<div class="image">
								<img src="public/images/product.png">
							</div>
							<div class="name">
								<a href=""><b>Asus MAXIMUS VII HERO</b></a>
							</div>
							<div class="price">
								<b>123.22 $</b>
							</div>
							<div class="add-to-cart">
								<form action="" method="POST">
									<button>ADD TO CART</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		include_once "template/footer.php";
		?>
	</div>
	
</body>
</html>