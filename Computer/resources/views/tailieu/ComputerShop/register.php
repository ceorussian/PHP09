<?php 
	include_once "template/head.php";
?>
<body>
	<div id="page">
		<?php 
		include_once "template/header.php";
		include_once "template/top-menu.php";
		?>
		<section id="register">
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
							<span>Register</span>
						</li>
					</ul>
				</div>				
			</div>
			<div class="container">
				<div class="content">
					<h1>REGISTER ACCOUNT</h1>
					<hr>
					<div class="note">
						<p>If you already have an account with us, please login at the</p><a href="#">login page</a>.
					</div>
					<form action="#" method="POST" enctype="multipart/form-data" class="form-register">
						<fieldset id="account">
							<legend>Your Account</legend>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<label>Re-password</label>
								<input type="password" name="re-password" placeholder="Re-password" class="form-control">
							</div>
						</fieldset>
						<fieldset id="detail">
							<legend>Your Details</legend>
							<div class="form-group">
								<label>Address</label>
								<input type="text" name="address" placeholder="Address" class="form-control">
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" name="phone" placeholder="Phone" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="Email" placeholder="Email" class="form-control">
							</div>
						</fieldset>
						<div class="button">
							<p>I have read and agree to the</p>
							<a href="#">Privacy Policy</a>
							<input type="checkbox" name="agree" class="agree">
							<input type="submit" name="submit" value="Continue" class="submit-btn">
						</div>
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