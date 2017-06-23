<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kecamatan extends MY_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_kecamatan");
        if (empty($this->session->userdata('user_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_kecamatan->list_kecamatan();
		$this->load->view('Kecamatan/List',$data);
    }

     public function form($id="")
	{
		
		$data['list']="";
		if ($id!="") 
		{
			$data['list'] = $this->db->query("SELECT * FROM kecamatan WHERE kecamatan_id='".$id."'")->result_array();	
		}
			$this->load->view('Kecamatan/Form',$data);
	}

	public function insert()
	{
		$data['kecamatan_id'] = $this->input->post('kecamatan_id');
		$data['kecamatan_nama'] = $this->input->post('kecamatan_nama');
		
		if ($data['kecamatan_id'] != "") 
		{
			$this->M_kecamatan->update_kecamatan($data, $data['kecamatan_id']);
		}else{
			$this->M_kecamatan->insert_kecamatan($data);
		}


		redirect('Data_kecamatan');
	}

	public function delete($id)
	{

		$this->M_kecamatan->delete($id);

		redirect('Data_kecamatan');

	}

	
}