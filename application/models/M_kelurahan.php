<?php


class M_kelurahan extends CI_Model
{

	public function list_kelurahan()
	{
		$this->db->select('*');
		$this->db->from('kelurahan');
		$this->db->join('kecamatan','kecamatan.`kecamatan_id`=kelurahan.`kecamatan_id`','left');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_kelurahan($data)
	{
		$this->db->insert('kelurahan',$data);
	}

	public function update_kelurahan($data_array, $id)
	{
		
		$this->db->update('kelurahan',$data_array, array('kelurahan_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('kelurahan_id',$id);
		$this->db->delete('kelurahan');
		
	}
	
}