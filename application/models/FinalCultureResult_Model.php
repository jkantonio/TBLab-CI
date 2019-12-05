<?php
class FinalCultureResult_Model extends CI_Model
{

	public function getData()
	{
		$search = $this->input->post('specimenCode');
		$this->db->select('*');
		$this->db->from('assigncode');
		$this->db->join('sputumcollectionschedulelog', 'sputumcollectionschedulelog.sputumcollectionid = assigncode.sputumcollectionid');
		$this->db->join('sputumrequestlog', 'sputumrequestlog.SputumRequestID = sputumcollectionschedulelog.SputumRequestID');
		$this->db->join('patient', 'patient.patientID = sputumrequestlog.patientID');
		$this->db->join('ljfinalresultlog','assigncode.specimencode = ljfinalresultlog.specimencode');
		$this->db->join('mgitfinalresultlog','assigncode.specimencode = mgitfinalresultlog.specimencode');
		$this->db->where('assigncode.SpecimenCode', $search);
		$query = $this->db->get();
		return $query->row_array();
	}
}	
?>