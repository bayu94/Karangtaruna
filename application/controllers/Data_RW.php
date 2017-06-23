<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_RW extends MY_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_rw");
        if (empty($this->session->userdata('user_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_rw->list_rw();
		$this->load->view('RW/List',$data);
    }

     public function form($id="")
	{
		$kecamatan = array();
		$cari_kecamatan = $this->db->query('SELECT * FROM kecamatan')->result_array();
		$data['dropkecamatan']=$cari_kecamatan;


		$data['list']="";
		if ($id!="") 
		{
			$data['list'] = $this->db->query("SELECT * FROM rw WHERE rw_id='".$id."'")->result_array();	
			$data["dropkelurahan"] = $this->db->query('SELECT * FROM kelurahan WHERE kecamatan_id = "'.$data["list"][0]["kecamatan_id"].'" ')->result_array();
		}
			// print_r($data);
			$this->load->view('RW/Form',$data);
	}

	public function insert()
	{
		$data['rw_id'] = $this->input->post('rw_id');
		$data['rw_nama'] = $this->input->post('rw_nama');
		$data['rw_no'] = $this->input->post('rw_no');
		$data['kecamatan_id'] = $this->input->post('kecamatan_id');
		$data['kelurahan_id'] = $this->input->post('kelurahan_id');
		
		if ($data['rw_id'] != "") 
		{
			$this->M_rw->update_rw($data, $data['rw_id']);
		}else{
			$this->M_rw->insert_rw($data);
		}


		redirect('Data_RW');
	}

	public function delete($id)
	{

		$this->M_rw->delete($id);

		redirect('Data_RW');

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
}