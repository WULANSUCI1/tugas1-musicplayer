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

		<div class="menu">
			<a href="index.php">HOME</a>
			<a href="index.php?page=index_album">ALBUM</a>
			<a href="index.php?page=index_login" style="margin-left: 570px;">LOGIN</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020. WULAN SUCI
		</div>
	</div>
</body>
</html>