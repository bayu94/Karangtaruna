<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login/Login_view');
	}

	public function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model("M_login");
		$cek = $this->M_login->cek($username, $password);
		if ($cek->num_rows() == 1) 
		{
			foreach ($cek->result_array() as $sess_data) 
			{
				// $sess_data['id_user'] = $data->id_user;
				// $sess_data['Nama'] = $data->Nama;
				// $sess_data['username'] = $data->username;
				// $sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}

			if ($this->session->userdata('user_level') =='1') {
				redirect('Ketua_jaksel');
			}

			elseif ($this->session->userdata('user_level') == '2') {
				redirect('agenda');
			}
			
		}
		else{
			$this->session->set_flashdata('pesan', 'Maaf, Username dan password salah');
			redirect('Login');
		}

	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}