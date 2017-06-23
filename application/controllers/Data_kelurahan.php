<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Data_kelurahan extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_kelurahan");
        if (empty($this->session->userdata('user_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_kelurahan->list_kelurahan();
		$this->load->view('Kelurahan/List',$data);
    }

     public function form($id="")
	{
		$kecamatan = array();
		$cari_kecamatan = $this->db->query('SELECT * FROM kecamatan')->result_array();
		$data['dropkecamatan']=$cari_kecamatan;

		$data['list']="";
		if ($id!="") 
		{
			$data['list'] = $this->db->query("SELECT * FROM kelurahan WHERE kelurahan_id='".$id."'")->result_array();	
		}
			$this->load->view('Kelurahan/Form',$data);
	}

	public function insert()
	{
		$data['kelurahan_id'] = $this->input->post('kelurahan_id');
		$data['kelurahan_nama'] = $this->input->post('kelurahan_nama');
		$data['kecamatan_id'] = $this->input->post('kecamatan_id');
		
		if ($data['kelurahan_id'] != "") 
		{
			$this->M_kelurahan->update_kelurahan($data, $data['kelurahan_id']);
		}else{
			$this->M_kelurahan->insert_kelurahan($data);
		}


		redirect('Data_kelurahan');
	}

	public function delete($id)
	{

		$this->M_kelurahan->delete($id);

		redirect('Data_kelurahan');

	}
}