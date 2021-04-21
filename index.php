<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<title>medsosAPP</title>
</head>

<body>
	<?php include "validasi/validasiLogin.php"; ?>
	<div class="container">
		<div class="row jarak">
			<div class="col">
				<img src="image/logo.jpg" alt="logo">
				<h6>by:Yogi Widyanto</h6>
			</div>
			<div class="col">
				<form method="POST" action="index.php">
					<div class="form-group">
						<label for="user">Username</label>
						<div class="eror">
							<?php if (!empty($eror2)) {echo $eror2;}?>
						</div>
						<input id="user" class="form-control" type="text" name="username" value="<?php if(isset($_POST['username']))echo htmlspecialchars($_POST['username'])?>" required>
					</div>
					<div class="form-group">
						<label for="pass">Password</label>
						<input id="pass" class="form-control" type="password" name="password" value="<?php if(isset($_POST['password']))echo htmlspecialchars($_POST['password'])?>" required>
					</div>
					<div class="form-group">
						<label for="show">Show Password</label>
						<input id="show" type="checkbox" name="show">
					</div>
					<div class="form-group ">
						<input id="submitLogin" class="form-control" type="submit" name="login" value='Login'>
					</div>
					<div class="form-group ">
						<a href="daftar.php" id="submitDaftar" class="form-control text-center ">SignUp</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$('#show').click(function () {
				if ($(this).is(':checked')) {
					$('#pass').attr('type', 'text');
				} else {
					$('#pass').attr('type', 'password');
				}
			});
			
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>