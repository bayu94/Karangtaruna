<?php


class M_pengguna extends CI_Model
{

	public function list_pengguna()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('kecamatan','kecamatan.`kecamatan_id`=user.`kecamatan_id`','left');
		$this->db->join('kelurahan','kelurahan.`kelurahan_id`=user.`kelurahan_id`','left');
		$this->db->join('rw','rw.`rw_id`=user.`rw_id`','left');
		$this->db->join('rt','rt.`rt_id`=user.`rt_id`','left');
		$this->db->join('status','status.`status_id`=user.`status`','left');
		$list_data = $this->db->get()->result_array();
		return $list_data; 
	}
	public function insert_pengguna($data)
	{
		$this->db->insert('user',$data);
	}

	public function update_pengguna($data_array, $id)
	{
		// Update Data di CI butuh 3 parameter . 
		// 1 nama table
		// 2 SET Update --> Format Array
		// 3 Where (Kondisi) -->Format Array
		$this->db->update('user',$data_array, array('user_id'=>$id));
		
	}

	public function delete($id)
	{
		$this->db->where('user_id',$id);
		$this->db->delete('user');
		
	}
	
}