<?php


class M_ketua_jaksel extends CI_Model
{

	public function list_agenda()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->join('status_agenda','status_agenda.`status_id`=pesan.`status`','left');
		$this->db->where('status','2');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}

	public function list_semua()
	{
		$this->db->count_all_results('pesan');  // Produces an integer, like 25
		$this->db->from('pesan');
		$this->db->count_all_results();
	}
	
}