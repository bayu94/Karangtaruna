<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketua_jaksel extends CI_Controller
{
	
	function __construct() 
    {
        parent::__construct();
        $this->load->model("M_ketua_jaksel");
     //    if (empty($this->session->userdata('akses'))) 
   		// 	 {
			 	// redirect('Login');
   		// 	 }
        
    }

    public function index()
    {
        $data['list'] = $this->M_ketua_jaksel->list_agenda();

        $se = array();
        $semu = $this->db->query("SELECT COUNT(*) AS `numrows` FROM `pesan`")->result_array();
        $data['semua']=$semu;

        $setuju = array();
        $setuju_query = $this->db->query("SELECT COUNT(*) AS `setuju` FROM `pesan` WHERE status='2'")->result_array();
        $data['AgendaSetuju']=$setuju_query;

        $tidak = array();
        $tidak_setuju_query = $this->db->query("SELECT COUNT(*) AS `TidakSetuju` FROM `pesan` WHERE status='3'")->result_array();
        $data['AgendaTidakSetuju']=$tidak_setuju_query;

    	$this->load->view('Ketua_jaksel/Home',$data);
    }
}