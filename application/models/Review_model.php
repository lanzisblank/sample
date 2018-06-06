<?php
class Review_model extends CI_Model {
	public function add($data)
	{

		$this->load->database();
		$this->db->insert('tblInfo',$data);
		

	}
	public function update($id, $data2)
	{

		$this->load->database();
		$this->db->where('id',$id);
		$this->db->update('tblInfo',$data2);
	
	}

	public function delete($id, $data3)
	{

		$this->load->database();
		$this->db->where('id',$id);
		$this->db->delete('tblInfo');
	
	}

	public function select()
	{
		 $this->db->select("id,name,age,gender");
		$query = $this->db->from('tblInfo');
		return $query;
	}
}
?>