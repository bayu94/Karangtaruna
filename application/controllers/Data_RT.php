<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_RT extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_rt");
        if (empty($this->session->userdata('user_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_rt->list_rt();
		$this->load->view('RT/List',$data);
    }

    public function form($id="")
	{
		$kecamatan = array();
		$cari_kecamatan = $this->db->query('SELECT * FROM kecamatan')->result_array();
		$data['dropkecamatan']=$cari_kecamatan;

		$data['list']="";
		if ($id!="") 
		{
			$data['list'] = $this->db->query("SELECT * FROM rt WHERE rt_id='".$id."'")->result_array();	
		}
			// var_dump($data);
			$this->load->view('RT/Form',$data);
	}

	public function insert()
	{
		$data['rt_id'] = $this->input->post('rt_id');
		$data['rt_nama'] = $this->input->post('rt_nama');
		$data['rt_no'] = $this->input->post('rt_no');
		$data['kecamatan_id'] = $this->input->post('kecamatan_id');
		$data['kelurahan_id'] = $this->input->post('kelurahan_id');
		$data['rw_id'] = $this->input->post('rw_id');

		
		if ($data['rt_id'] != "") 
		{
			$this->M_rt->update_rt($data, $data['rt_id']);
		}else{
			$this->M_rt->insert_rt($data);
		}


		redirect('Data_RT');
	}

	public function delete($id)
	{

		$this->M_rt->delete($id);

		redirect('Data_RT');

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
}