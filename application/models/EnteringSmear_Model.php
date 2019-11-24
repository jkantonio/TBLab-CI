<?php
class EnteringSmear_Model extends CI_Model
{

	public function getPosts()
	{
		$search = $this->input->post('patientId');
		$this->db->select('*');
		$this->db->from('patient');
		$this->db->join('sputumrequestlog', 'patient.PatientID = sputumrequestlog.PatientID', 'LEFT');
		$this->db->where('patient.PatientId', $search);
		$query = $this->db->get();
		return $query->result();
	}	
}	
?>