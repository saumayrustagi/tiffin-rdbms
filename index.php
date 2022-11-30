<?php
include "header.php";
// session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
	<style>
		.card-img-top {
			width: 100%;
			height: 15vw;
			object-fit: cover;
		}
	</style>
</head>

<body>

	<!-- <?php print_r($_SESSION['cart']) ?> -->


	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="img/t1.png" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title">Tiffin 1</h5>
							<p class="card-text">Price: Rs.450</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
							<input type="hidden" name="Item_Name" value="Tiffin 1">
							<input type="hidden" name="Price" value="450">
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="img/t2.webp" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title">Tiffin 2</h5>
							<p class="card-text">Price: Rs.350</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
							<input type="hidden" name="Item_Name" value="Tiffin 2">
							<input type="hidden" name="Price" value="350">
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="img/t3.jpg" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title">Tiffin 3</h5>
							<p class="card-text">Price: Rs.700</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
							<input type="hidden" name="Item_Name" value="Tiffin 3">
							<input type="hidden" name="Price" value="700">
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3">
				<form action="manage_cart.php" method="POST">
					<div class="card">
						<img src="img/t4.jpeg" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h5 class="card-title">Tiffin 4</h5>
							<p class="card-text">Price: Rs.370</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
							<input type="hidden" name="Item_Name" value="Tiffin 4">
							<input type="hidden" name="Price" value="370">
						</div>
					</div>
				</form>
			</div>

			<?php if (isset($_GET['add'])) { ?>
			<br />
			<br />
			<div class="alert alert-success" style="margin-top:15px">
				<strong>Success!</strong> Added to Cart
			</div>
			<?php } ?>

			<?php if (isset($_GET['alad'])) { ?>
			<br />
			<br />
			<div class="alert alert-warning" style="margin-top:15px">
				<strong>Warning!</strong> Already Added to Cart
			</div>
			<?php } ?>

		</div>
	</div>
</body>

</html>