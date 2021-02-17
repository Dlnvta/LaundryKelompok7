<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->model('Auth');
	}

	public function index()
	{
		$data['tittle'] = "Laundry | Sign In";

		$this->load->view('template/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('template/auth_footer');
	}
	
	public function register()
	{
		$data['tittle'] = "Laundry | Sign Up";

		$this->load->view('template/auth_header', $data);
		$this->load->view('auth/register');
		$this->load->view('template/auth_footer');
	}

	public function create()
	{
		$this->_register();
	}

	private function _register()
	{
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');

		$data = [
			'email' => $email,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'role_id'	=> 2,
		];
		$this->db->insert('user', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		Succes Create Account!!
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');
		redirect('AuthController');
	}
}

	