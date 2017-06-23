<?php


class M_Agenda extends CI_Model
{

	public function list_agenda()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->join('status_agenda','status_agenda.`status_id`=pesan.`status`','left');
		$array = array('status' => '1', 'rt_id' => $this->session->userdata('rt_id'), 'rw_id' => $this->session->userdata('rw_id'), 'kelurahan_id' => $this->session->userdata('kelurahan_id'), 'kecamatan_id' => $this->session->userdata('kecamatan_id'));
		$this->db->where($array); 
		// $this->db->where('status','1');
		// $this->db->where('user_id',$id);
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_agenda($data)
	{
		$this->db->insert('pesan',$data);
	}

	public function update_agenda($data_array, $id)
	{
		
		$this->db->update('pesan',$data_array, array('pesan_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('pesan_id',$id);
		$this->db->delete('pesan');
		
	}

	public function list_agenda_tidakSetuju()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->join('status_agenda','status_agenda.`status_id`=pesan.`status`','left');
		$array = array('status' => '3', 'rt_id' => $this->session->userdata('rt_id'), 'rw_id' => $this->session->userdata('rw_id'), 'kelurahan_id' => $this->session->userdata('kelurahan_id'), 'kecamatan_id' => $this->session->userdata('kecamatan_id'));
		$this->db->where($array); 
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}

	public function list_setuju()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->join('status_agenda','status_agenda.`status_id`=pesan.`status`','left');
		$array = array('status' => '2', 'rt_id' => $this->session->userdata('rt_id'), 'rw_id' => $this->session->userdata('rw_id'), 'kelurahan_id' => $this->session->userdata('kelurahan_id'), 'kecamatan_id' => $this->session->userdata('kecamatan_id'));
		$this->db->where($array); 
		// $this->db->where('status','2');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}

	public function isi_pesan($id)
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->join('user','user.`user_id`=pesan.`user_id`','left');
		$this->db->join('kecamatan','kecamatan.`kecamatan_id`=pesan.`kecamatan_id`','left');
		$this->db->join('kelurahan','kelurahan.`kelurahan_id`=pesan.`kelurahan_id`','left');
		$this->db->join('rw','rw.`rw_id`=pesan.`rw_id`','left');
		$this->db->join('rt','rt.`rt_id`=pesan.`rt_id`','left');
		$this->db->join('status','status.`status_id`=pesan.`status_id`','left');
		$this->db->where('pesan_id',$id);
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	
}