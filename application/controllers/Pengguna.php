<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends MY_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_pengguna");
        if (empty($this->session->userdata('user_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_pengguna->list_pengguna();
		$this->load->view('Pengguna/List',$data);
    }

    public function form($id="")
	{
		$kecamatan = array();
		$cari_kecamatan = $this->db->query('SELECT * FROM kecamatan')->result_array();
		$data['dropkecamatan']=$cari_kecamatan;

		$kelurahan = array();
		$cari_kelurahan = $this->db->query('SELECT * FROM kelurahan')->result_array();
		$data['dropkelurahan']=$cari_kelurahan;

		$rw = array();
		$cari_rw = $this->db->query('SELECT * FROM rw')->result_array();
		$data['droprw']=$cari_rw;

		$rt = array();
		$cari_rt = $this->db->query('SELECT * FROM rt')->result_array();
		$data['droprt']=$cari_rt;

		$data['list']="";
		if ($id!="") 
		{
			$data['list'] = $this->db->query("SELECT * FROM user WHERE user_id='".$id."'")->result_array();	
		}
			// var_dump($data);
			$this->load->view('Pengguna/Form',$data);
	}

	public function insert()
	{
		$data['user_id'] = $this->input->post('user_id');
		$data['user_nama'] = $this->input->post('user_nama');
		$data['user_jk'] = $this->input->post('user_jk');
		$data['user_pass'] = $this->input->post('user_pass');
		$data['user_level'] = $this->input->post('user_level');
		$data['kecamatan_id'] = $this->input->post('kecamatan_id');
		$data['kelurahan_id'] = $this->input->post('kelurahan_id');
		$data['rw_id'] = $this->input->post('rw_id');
		$data['rt_id'] = $this->input->post('rt_id');
		$data['status'] = $this->input->post('status');
		
		if ($data['user_id'] != "") 
		{
			$this->M_pengguna->update_pengguna($data, $data['user_id']);
		}else{
			$this->M_pengguna->insert_pengguna($data);
		}


		redirect('Pengguna');
	}

	public function delete($id)
	{

		$this->M_pengguna->delete($id);

		redirect('Pengguna');

	}

	public function json_kecamatan()
	{
		$data = array();
		$id = $this->input->get('id');
		$this->db->select('*');
		$this->db->from('kelurahan');
		$this->db->where('kecamatan_id',$id);
		$list = $this->db->get()->result_array();
		// exit();
		foreach ($list as $key => $row)
		{
			$this->output->set_content_type('application/json');
			

			array_push($data, $row);
		}

			$this->output->set_output(json_encode($data,JSON_PRETTY_PRINT));

	}

	public function json_kelurahan()
	{
		$data = array();
		$id = $this->input->get('id');
		$this->db->select('*');
		$this->db->from('rw');
		$this->db->where('kelurahan_id',$id);
		$list = $this->db->get()->result_array();
		// exit();
		foreach ($list as $key => $row)
		{
			$this->output->set_content_type('application/json');
			

			array_push($data, $row);
		}

			$this->output->set_output(json_encode($data,JSON_PRETTY_PRINT));

	}

	public function json_rw()
	{
		$data = array();
		$id = $this->input->get('id');
		$this->db->select('*');
		$this->db->from('rt');
		$this->db->where('rw_id',$id);
		$list = $this->db->get()->result_array();
		// exit();
		foreach ($list as $key => $row)
		{
			$this->output->set_content_type('application/json');
			

			array_push($data, $row);
		}

			$this->output->set_output(json_encode($data,JSON_PRETTY_PRINT));

	}
}