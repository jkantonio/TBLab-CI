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

	public function inputData(){
		
		$patientID = $this->input->post('patientID');
		//updating the transaction log
		$employeeID = $this->session->userdata('userID');
		$data = array(
			'TransactionListID' => '11',
			'RelevantInfo' => $patientID,
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

		$report = $this->input->post('finalcultureResult');
		$specimenCode = $this->input->post('specCode');
		$dateReported = $this->input->post('dateReported');

		$data1 = array(
			'SpecimenCode' => $specimenCode,
			'MannerOfReporting' => $report,
			'CultureFinalResultDate' => $dateReported,
			'TransactionLogID' => $lastID
		);
		$this->db->insert('culturefinalresultlog', $data1);

	}	
}	
?>