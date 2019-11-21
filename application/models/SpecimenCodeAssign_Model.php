<?php
class SpecimenCodeAssign_Model extends CI_Model
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

	public function addSpecimenCode()
	{
		$specimenCode = $this->input->post('specimenCode');

		$sql = "INSERT INTO assigncode(SpecimenCode) VALUES ('USB0003A')";
		$this->db->query($sql);
	}
}	
?>