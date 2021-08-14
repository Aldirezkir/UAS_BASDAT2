<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Auth extends CI_controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		// $this->load->model('Model_auth');
		
	}


	public function index()
	{
		if ($this->session->userdata('email'))
		{
			if ($this->session->userdata('role_users')=="ADMIN") 
			{
				redirect('pegawai');
			}
			
		}
		

		$this->form_validation->set_message('required','kolom {field} harus diisi');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() ==false )
		 {
			$data['title'] = 'Halaman Login';
			$this->load->view('login',$data);
		}
		else
		{
			$this->_login();
		}
		
	}

//======================
	//login all users

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		
		$users = $this->db->get_where('tb_users', ['email'=> $email])->row_array();
		
		if ($users) 
		{
			//jika usernya aktif
			if ($users) 
			{
				// if($password == 'password')
				// {
					
					$data = ['email'=> $users['email'],
							 'username'=> $users['username'],
							 'id_user'	=> $users['id_user']
							];
							// print_r($data);
							// die();
							$this->session->set_userdata( $data );

							
							if ($users['role_users']=="ADMIN") 
							{
								redirect('pegawai');
							}
							
				// }
				// else
				// {
				// 	$this->session->set_flashdata('pesan','<div  class="alert alert-danger" role="alert">Password Salah</div>');
				// redirect('Auth');				
				// }
			}
			else
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Akun Anda Belum Diaktifkan</div>');
				redirect('Auth');		
			}
		}
		else
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Email Belum Terdaftar Daftar</div>');
						redirect('Auth');
		}
	}

//ahir login users




//========================	
//logout
	public function logout()
	{

		if ($this->session->userdata('email'))
		{
				$this->session->unset_userdata('email');
				$this->session->unset_userdata('role_users');
				$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Berhasil Keluar Sistem.!</div>');
				redirect('Auth');
		
		}

		

	}
//ahir logout

}
