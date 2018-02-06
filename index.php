<?php

session_start();
if(isset($_SESSION['login'])) {
	header("location:home.php");
} else {
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="proses/proses_login.php" method="post">
	
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">
	<label>
		<input type="checkbox">Remember Me
	</label>

	<button type="submit">Sign In</button>

</form>

</body>
</html>


<?php
}
?>