<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgendaJaksel extends CI_Controller
{
	
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_AgendaJaksel");
        if (empty($this->session->userdata('user_level'))) 
   			 {
			 	redirect('Login');
   			 }
        
    }

    public function index()
    {
    	$data['list'] = $this->M_AgendaJaksel->list_agenda();
		$this->load->view('AgendaJaksel/List',$data);
    }


	public function delete($id)
	{

		$this->M_AgendaJaksel->delete($id);

		redirect('AgendaJaksel');

	}

	public function edit()
	{
		$data['status'] = $this->input->post('status');
		$pesan_id = $this->input->post('pesan_id');

		$this->db->update("pesan",$data,array('pesan_id'=>$pesan_id));
		redirect('AgendaJaksel');
	}

	public function tidak_setuju()
	{
		$data['list'] = $this->M_AgendaJaksel->list_agenda_tidakSetuju();
		$this->load->view('AgendaJaksel/List_TidakSetuju',$data);
	}

	public function setuju()
	{
		$data['list'] = $this->M_AgendaJaksel->list_setuju();
		$this->load->view('AgendaJaksel/List_Setuju',$data);
	}

	public function isipesan($id)
	{
		$data['list'] = $this->M_AgendaJaksel->isi_pesan($id);

		$this->load->view('AgendaJaksel/Isi_pesan',$data);
	}

}