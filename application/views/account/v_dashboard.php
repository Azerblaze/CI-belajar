<?php 
	defined('BASEPATH') OR exit('No direct script access allowed')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Dashboard | Simple Dashboard
	</title>
</head>
<body>
	
	<h3>
		Dashboard
	</h3>
	
	<p>
		Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('name')); ?>!
		Untuk logout dari sistem, silahkan klik <?php echo anchor('login/logout', 'di sini...') ?>
	</p>

</body>
</html>
