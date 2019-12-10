<?php
class EnteringSmear_Model extends CI_Model
{

	public function getPosts()
	{
		$search = $this->input->post('specimenCode');
		$this->db->select('*');
		$this->db->from('assigncode');
		$this->db->join('sputumcollectionschedulelog', 'sputumcollectionschedulelog.sputumcollectionid = assigncode.sputumcollectionid');
		$this->db->join('sputumrequestlog', 'sputumrequestlog.SputumRequestID = sputumcollectionschedulelog.SputumRequestID');
		$this->db->join('patient', 'patient.patientID = sputumrequestlog.patientID');
		$this->db->where('assigncode.SpecimenCode', $search);
		$query = $this->db->get();
		return $query->row_array();
	}	

	public function inputData(){
		//updating the transaction log
		$employeeID = $this->session->userdata('userID');
		$patientID = $this->input->post('patientID');
		$specimenCode = $this->input->post('specCode');
		$dateProc = $this->input->post('dateProc');
		$mannerOfReporting = $this->input->post('smear');
		$result = $this->input->post('MGITresult');
		$data = array(
			'TransactionListID' => '6',
			'EmployeeID' => $employeeID,
			'RelevantInfo' => $patientID
		);
		$this->db->insert('transactionlog', $data);
		
		//gettransaction log id from above
		$query = $this->db->query("SELECT * FROM transactionlog ORDER BY TransactionLogID DESC");
		$lastID = 0;
		if ($query->num_rows() > 0){
			$row = $query->row();
			$lastID = $row->TransactionLogID;
		}

		$data1 = array(
			'SpecimenCode' => $specimenCode,
			'MannerOfReporting' => $mannerOfReporting,
			'SmearResultDate' => $dateProc,
			'TransactionLogID' => $lastID
		);
		$this->db->insert('smearresultlog', $data1);

	}
}	
?>