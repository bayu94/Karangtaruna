<?php


class M_rt extends CI_Model
{

	public function list_rt()
	{
		$this->db->select('*');
		$this->db->from('rt');
		$this->db->join('kelurahan','kelurahan.`kelurahan_id`=rt.`kelurahan_id`','left');
		$this->db->join('kecamatan','kecamatan.`kecamatan_id`=rt.`kecamatan_id`','left');
		$this->db->join('rw','rw.`rw_id`=rt.`rw_id`','left');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_rt($data)
	{
		$this->db->insert('rt',$data);
	}

	public function update_rt($data_array, $id)
	{
		
		$this->db->update('rt',$data_array, array('rt_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('rt_id',$id);
		$this->db->delete('rt');
		
	}
	
}