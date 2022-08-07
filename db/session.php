<?php
	include "login.php";
	$user_check = $_SESSION['login_user'];
	$sql = "SELECT * FROM users WHERE email = '$user_check'";
	$run = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($run);
	$login_detail = $row["email"];
    $amount = $row["deposit"];
    $demo = $row["demo"];
	$login_id =$row['id'];
    $position = $row['openposition'];
    echo "<input type='hidden' class='amount' value='$position'>";
	echo "<input type='hidden' class='user_m' value='$user_check'>";

	if (!isset($_SESSION['login_user'])) {
		echo "<script>location.href='../login'</script>";
	}
?>