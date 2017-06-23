<?php


class M_kecamatan extends CI_Model
{

	public function list_kecamatan()
	{
		$this->db->select('*');
		$this->db->from('kecamatan');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_kecamatan($data)
	{
		$this->db->insert('kecamatan',$data);
	}

	public function update_kecamatan($data_array, $id)
	{
		
		$this->db->update('kecamatan',$data_array, array('kecamatan_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('kecamatan_id',$id);
		$this->db->delete('kecamatan');
		
	}
	
}