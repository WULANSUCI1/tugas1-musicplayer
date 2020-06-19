<center><h2>LOGIN</h2>
<h4 style="color: #dd6e8c;"># make your day happy :) #</h4></center>

<?php 

// Kalau login error tampilkan notifikasi
if (isset($_SESSION['login_error'])) {
	echo '<p style="color:red">Sorry, Login not Found!</p>';
	unset($_SESSION['login_error']);
}

// Kalau sesi user_name ada, redirect
if (isset($_SESSION['user_name'])) {	
	header("location:dashboard.php"); 
}

?>

<form action="index_proses.php" method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="user_name" required="" autocomplete="off"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="user_password" required="" autocomplete="off"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-login" value="LOGIN" style="background: yellow;"></td>
		</tr>
	</table>
</form>