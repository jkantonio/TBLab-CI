<?php
class EnteringSmear_Model extends CI_Model
{

	public function getPosts()
	{
		$search = $this->input->post('specimenCode');
		$this->db->select('*');
		$this->db->from('assigncode');
		$this->db->join('smearresultlog', 'assigncode.SpecimenCode = smearresultlog.SpecimenCode', 'LEFT');
		$this->db->where('assigncode.SpecimenCode', $search);
		$query = $this->db->get();
		return $query->row_array();
	}	
}	
?>