<?php 

// Kalau sesi user_name tidak ada, redirect
/*if (!isset($_SESSION['user_name'])) {	
	header("location:index.php"); 
}*/ 

?>

<!DOCTYPE html>
<html>
<head>
	<title>MUSIC PLAYER</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/myfavicon.ico" rel="shortcut icon">
</head>
<body style="background: url('layout/assets/images/g.png');">
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET; ?>images/headermusik.jpg">
		</div>
	<div class="container">
		<div class="menu">
			<a href="dashboard.php">HOME</a>
			<a href="dashboard.php?page=artist_tampil">ARTIST</a>
			<a href="dashboard.php?page=album_tampil">ALBUM</a>
			<a href="dashboard.php?page=track_tampil">TRACK</a>
			<a href="dashboard.php?page=user_tampil">USER</a>
			<a href="user_logout.php" style="margin-left: 350px;">LOGOUT</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020. WULAN SUCI
		</div>
	</div>
</body>
</html>