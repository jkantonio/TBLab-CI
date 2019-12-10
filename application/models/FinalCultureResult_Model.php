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

	public function getResult(){
		$search = $this->input->post('patientID');
		$query = $this->db->query("SELECT assigncode.SpecimenCode FROM sputumrequestlog INNER JOIN sputumcollectionschedulelog on sputumrequestlog.SputumRequestID = sputumcollectionschedulelog.SputumRequestID INNER JOIN assigncode ON assigncode.SputumCollectionID = sputumcollectionschedulelog.SputumCollectionID where sputumrequestlog.PatientID = '$search'");
		return $query->result();
	}

	public function getEmp(){
		$search = $this->session->userdata('userID');
		$query = $this->db->query("SELECT * FROM users WHERE users.EmployeeID = '$search'");
		return $query->row();
	}

	public function getSpecific($specimenCode){
		$query = $this->db->query("SELECT culturefinalresultlog.MannerOfReporting as MannerOfReporting1, smearresultlog.MannerOfReporting, culturefinalresultlog.CultureFinalResultDate, smearresultlog.SmearResultDate, assigncode.DateCollected FROM culturefinalresultlog INNER JOIN smearresultlog on culturefinalresultlog.SpecimenCode = smearresultlog.SpecimenCode INNER JOIN assigncode on assigncode.SpecimenCode = smearresultlog.SpecimenCode where culturefinalresultlog.SpecimenCode = '$specimenCode'");
		return $query->result();
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