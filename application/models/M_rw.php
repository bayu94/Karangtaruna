<?php


class M_rw extends CI_Model
{

	public function list_rw()
	{
		$this->db->select('*');
		$this->db->from('rw');
		$this->db->join('kelurahan','kelurahan.`kelurahan_id`=rw.`kelurahan_id`','left');
		$this->db->join('kecamatan','kecamatan.`kecamatan_id`=rw.`kecamatan_id`','left');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_rw($data)
	{
		$this->db->insert('rw',$data);
	}

	public function update_rw($data_array, $id)
	{
		
		$this->db->update('rw',$data_array, array('rw_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('rw_id',$id);
		$this->db->delete('rw');
		
	}
	
}