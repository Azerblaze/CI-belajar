<?php 
	defined('BASEPATH') OR exit('No direct script access allowed')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Login | Simple Login
	</title>
</head>
<body>
	
	<h2>Halaman Login</h2>
	<?php
		// Print if Success
		if($this->session->flashdata('success')) {
			echo '<p class="warning" style="margin: 10px 20px;" >'.$this->session->flashdata('success').'</p>';
		}
	?>

	<!-- Login Form -->
	<?php echo form_open('login'); ?>
	<!-- Email field -->
	<p>Email:</p>
	<p>
		<input type="text" name="email" value="<?php echo set_value('email'); ?>" >
	</p>
	<p> <?php echo form_error('email') ?> </p>

	<!-- Password field -->
	<p>Password:</p>
	<p>
		<input type="text" name="password" value="<?php echo set_value('password'); ?>" >
	</p>
	<p> <?php echo form_error('password') ?> </p>

	<!-- Submit button -->
	<p>
		<input type="submit" name="btnSubmit" value="Login" >
	</p>

	<?php echo form_close(); ?>

	<p>
		Kembali ke beranda, Silahkan klik <?php echo anchor(site_url().'/beranda', 'di sini...'); ?>
	</p>

</body>
</html>
