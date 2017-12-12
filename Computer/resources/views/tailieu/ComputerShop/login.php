<?php 
	include_once "template/head.php";
?>
<body>
	<div id="page">
		<?php 
			include_once "template/header.php";
			include_once "template/top-menu.php";
		?>
		<section class="login">
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
							<a href="#">Account</a>
						</li>
						<li>
							<i class="material-icons">keyboard_arrow_right</i>
							<span>Login</span>
						</li>
					</ul>
				</div>				
			</div>
			<div class="container content">
				<div class="register-form">
					<h2>New Customer</h2>
					<strong>Register Account</strong>
					<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
					<hr>
					<div>
						<a href="">Continue</a>
					</div>
				</div>
				<div class="login-form">
					<h2>Returning Customer</h2>
					<strong>I am a returning customer</strong>
					<hr>
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control">
							<a href="#">Forgotten Password</a>
						</div>
						<input type="submit" name="submit" value="LOGIN" class="submit">
					</form>
				</div>
			</div>
		</section>
		<?php
			include_once "template/footer.php";
		?>
	</div>
	
</body>
</html>