<?php
class EncodeMGITResult_Model extends CI_Model
{

	public function getData()
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
		$data = array(
			'TransactionListID' => '6',
			'EmployeeID' => $employeeID
		);
		$this->db->insert('transactionlog', $data);
		
		//gettransaction log id from above
		$query = $this->db->query("SELECT * FROM transactionlog ORDER BY TransactionLogID DESC");
		$lastID = 0;
		if ($query->num_rows() > 0){
			$row = $query->row();
			$lastID = $row->TransactionLogID;
		}

		$dateProc = $this->input->post('dateReported');
		$result = $this->input->post('MGITresult');
		$specimenCode = $this->input->post('specCode');

		$data1 = array(
			'SpecimenCode' => $specimenCode,
			'MGITFinalResult' => $result,
			'MGITFinalResultDate' => $dateProc,
			'TransactionLogID' => $lastID
		);
		$this->db->insert('mgitfinalresultlog', $data1);

	}
}	
?>