<?php 
	defined('BASEPATH') OR exit('No direct script access allowed')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Notifikasi | Simple Success Notification
	</title>
</head>
<body>
	
	<h3>
		<?php echo $message; ?>
	</h3>
	
	<p>
		<?php echo anchor('beranda', 'Kembali ke beranda'); ?>
	</p>

</body>
</html>
