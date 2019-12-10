<?php
class StartIncubation_Model extends CI_Model
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

	public function add(){
		
		$specimenCode = $this->input->post('specCode');

		//updating the transaction log
		$employeeID = $this->session->userdata('userID');
		$data = array(
			'TransactionListID' => '4',
			'EmployeeID' => $employeeID,
			'RelevantInfo' => $specimenCode
		);
		$this->db->insert('transactionlog', $data);
		
		//gettransaction log id from above
		$query = $this->db->query("SELECT * FROM transactionlog ORDER BY TransactionLogID DESC");
		$lastID = 0;
		if ($query->num_rows() > 0){
			$row = $query->row();
			$lastID = $row->TransactionLogID;
		}

		$dateProc = $this->input->post('dateProcessed');
		$incubType = $this->input->post('incubationType');
		$true = true;
		$false = false;

		if($incubType == "MGIT"){
			//include has mgit in array
			$data1 = array(
				'SpecimenCode' => $specimenCode,
				'SampleProcessedOn' => $dateProc,
				'HasMGIT' => $true,
				'HasLJ' => $false,
				'TransactionLogID' => $lastID
			);
		}else if($incubType == "LJ"){
			$data1 = array(
				'SpecimenCode' => $specimenCode,
				'SampleProcessedOn' => $dateProc,
				'HasMGIT' => $false,
				'HasLJ' => $true,
				'TransactionLogID' => $lastID
			);
		}else if($incubType == "Both"){
			$data1 = array(
				'SpecimenCode' => $specimenCode,
				'SampleProcessedOn' => $dateProc,
				'HasMGIT' => $true,
				'HasLJ' => $true,
				'TransactionLogID' => $lastID
			);
		}

		
		$this->db->insert('startincubation', $data1);
	}
}	
?>