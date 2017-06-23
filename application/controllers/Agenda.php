<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_Agenda");
        if (empty($this->session->userdata('user_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	// $cek_id = $this->session->userdata('user_id');
    	// $id = $this->input->get($cek_id);
    	
    	$data['list'] = $this->M_Agenda->list_agenda();
		$this->load->view('Agenda/List',$data);
    }

    public function form($id="")
	{
		$kecamatan = array();
		$cari_kecamatan = $this->db->query('SELECT * FROM kecamatan')->result_array();
		$data['dropkecamatan']=$cari_kecamatan;

		$data['list']="";
		if ($id!="") 
		{
			$data['list'] = $this->db->query("SELECT * FROM pesan WHERE pesan_id='".$id."'")->result_array();	
		}
			// var_dump($data);
			$this->load->view('Agenda/Form',$data);
	}

	public function insert()
	{
		$data['pesan_id'] = $this->input->post('pesan_id');
		$data['pesan_judul'] = $this->input->post('pesan_judul');
		$data['pesan_tema'] = $this->input->post('pesan_tema');
		$data['pesan_isi'] = $this->input->post('pesan_isi');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['kecamatan_id'] = $this->session->userdata('kecamatan_id');
		$data['kelurahan_id'] = $this->session->userdata('kelurahan_id');
		$data['rw_id'] = $this->session->userdata('rw_id');
		$data['rt_id'] = $this->session->userdata('rt_id');
		$data['status_id'] = $this->session->userdata('status');
		$data['status'] = ('1');

		
		if ($data['pesan_id'] != "") 
		{
			$this->M_Agenda->update_agenda($data, $data['pesan_id']);
		}else{
			$this->M_Agenda->insert_agenda($data);
		}


		redirect('Agenda');
	}

	public function delete($id)
	{

		$this->M_Agenda->delete($id);

		redirect('Agenda');

	}

	public function edit()
	{
		$data['status'] = $this->input->post('status');
		$pesan_id = $this->input->post('pesan_id');

		$this->db->update("pesan",$data,array('pesan_id'=>$pesan_id));
		redirect('Agenda');
	}

	public function tidak_setuju()
	{
		$data['list'] = $this->M_Agenda->list_agenda_tidakSetuju();
		$this->load->view('Agenda/List_TidakSetuju',$data);
	}

	public function setuju()
	{
		$data['list'] = $this->M_Agenda->list_setuju();
		$this->load->view('Agenda/List_Setuju',$data);
	}

	public function isipesan($id)
	{
		$data['list'] = $this->M_Agenda->isi_pesan($id);

		$this->load->view('Agenda/Isi_pesan',$data);
	}


}