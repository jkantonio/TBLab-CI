<?php
class PulmonaryEvaluation_Model extends CI_Model
{

	public function getSpecimenCode()
	{
        $search = $this->input->post('patient');
        $this->db->select('assigncode.SpecimenCode');
        $this->db->select('patient.PatientFirstName');
        $this->db->select('patient.PatientLastName');
		$this->db->from('patient');
        $this->db->join('sputumrequestlog', 'patient.PatientID = sputumrequestlog.PatientID', 'RIGHT');
        $this->db->join('sputumcollectionschedulelog', 'sputumrequestlog.SputumRequestID = sputumcollectionschedulelog.SputumRequestID', 'RIGHT');
        $this->db->join('assigncode', 'sputumcollectionschedulelog.SputumCollectionID = assigncode.SputumCollectionID', 'RIGHT');
		$this->db->where('patient.PatientId', $search);
		$query = $this->db->get();
        return $query->result();
    }
}	
?>