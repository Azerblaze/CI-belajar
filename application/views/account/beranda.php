<?php 
	defined('BASEPATH') OR exit('No direct script access allowed')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Beranda | Simple Login
	</title>
</head>
<body>
	<h1>
		Selamat Datang ke situs kami
	</h1>

	<p>
		Silahkan Klik link berikut
		<?php echo anchor('login', 'Masuk') ?>
		untuk masuk ke dalam sistem atau
		<?php echo anchor('register', 'Daftar') ?>
		untuk mendaftar
	</p>
	
</body>
</html>
