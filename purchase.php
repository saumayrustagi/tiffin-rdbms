<?php
session_start();
$con = new mysqli("localhost", "root", "", "testing");

if (mysqli_connect_error()) {
	echo "<script>
		alert('Cannot connect to database');
		window.location.href='mycart.php';
	</script>
	";
	exit();
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['purchase'])) {
		$query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";

		if (mysqli_query($con, $query1)) {
			$Order_Id = mysqli_insert_id($con);
			$query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
			$stmt = mysqli_prepare($con, $query2);
			if ($stmt) {
				
				foreach ($_SESSION['cart'] as $key => $value) {
					echo nl2br("\n");
					$Item_Name = $value['Item_Name'];
					$Price = $value['Price'];
					$Quantity = $value['Quantity'];
					mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
					mysqli_stmt_execute($stmt);
					echo $Order_Id . " " . $Item_Name . " " . $Price . " " . $Quantity;
				}
				unset($_SESSION['cart']);
				echo "<script>
					alert('Order Placed');
					window.location.href = 'index.php';
					</script>
				";
			}




		} else {
			echo "<script>
				alert('SQL Error');
				window.location.href = 'mycart.php';
			</script>";
		}
	}
}

?>