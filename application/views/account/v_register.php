<?php 
	defined('BASEPATH') OR exit('No direct script access allowed')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Pendaftaran Akun | Simple Register
	</title>
</head>
<body>
	<h2>
		Pendaftaran Akun
	</h2>

	<?php echo form_open('register'); ?>
	<!-- Name Field -->
	<p>Name:</p>
	<p>
		<input type="text" name="name" value="<?php echo set_value('name'); ?>" >
	</p>
	<p> <?php echo form_error('name'); ?> </p>

	<!-- Email Field -->
	<p>Email:</p>
	<p>
		<input type="text" name="email" value="<?php echo set_value('email'); ?>" >
	</p>
	<p> <?php echo form_error('email'); ?> </p>

	<!-- Password Field -->
	<p>Password:</p>
	<p>
		<input type="text" name="password" value="<?php echo set_value('password'); ?>" >
	</p>
	<p> <?php echo form_error('password'); ?> </p>

	<!-- Password Confirmation Field -->
	<p>Password Confirmation:</p>
	<p>
		<input type="text" name="password_confirmation" value="<?php echo set_value('password_confirmation'); ?>" >
	</p>
	<p> <?php echo form_error('password_confirmation'); ?> </p>

	<!-- Submit Button -->
	<p>
		<input type="submit" name="btnSubmit" value="Daftar" >
	</p>
	<?php echo form_close() ?>

	<p>
		Kembali ke beranda, Silahkan klik disini <?php echo anchor(site_url().'/beranda', 'di sini...'); ?>
	</p>

</body>
</html>
