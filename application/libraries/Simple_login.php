<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_Login {

	// Set SUPER GLOBAL variable
	var $CI = NULL;

	public function __construct() {
		$this->CI =& get_instance();
	}

	// Function to login user account
	public function login($email, $password) {
		// Get email and password
		$query = $this->CI->db->get_where('users', array('email'=>$email, 'password'=>md5($password)));

		// Check if user exist
		if($query->num_rows() == 1) {
			$row = $this->CI->db->query('SELECT * FROM users where email = "'.$email.'"');
			$admin = $row->row();
			$id = $admin->id;
			$name = $admin->name;

			// Set session user
			$this->CI->session->set_userdata('name', $name);
			$this->CI->session->set_userdata('email', $email);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);

			// Redirect to dashboard
			redirect(site_url('dashboard'));
		} else {
			// If user does not exist, set message in flashdata
			$this->CI->session->set_flashdata('success', 'Email atau password anda salah, silahkan coba lagi');

			// Redirect to login page
			redirect(site_url('login'));
		}

		return false;
	}

	// Function to check if user logged in
	public function cek_login() {
		// Check session email
		if($this->CI->session->userdata('email') == '') {

			// Set the notification
			$this->CI->session->set_flashdata('success', 'Anda belum login');

			// Redirect to login page
			redirect(site_url('login'));
		}
	}

	// Function to logout the user
	public function logout() {
		// Remove data form session
		$this->CI->session->unset_userdata('name');
		$this->CI->session->unset_userdata('email');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('success', 'Anda berhasil logout');

		// Redirect to login page
		redirect(site_url('login'));
	}
}

?>
