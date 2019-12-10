<?php
class DrugSusceptibilityTest_Model extends CI_Model
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

	public function getMedTechs(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('UserProfession', 'Medical Technologist');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputData(){
		
		$specimenCode = $this->input->post('specCode');
		//updating the transaction log
		$employeeID = $this->session->userdata('userID');
		$data = array(
			'TransactionListID' => '11',
			'RelevantInfo' => $specimenCode,
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
		$specimenCode = $this->input->post('specCode');
		$streptomycinResult = $this->input->post('streptomycinResult');
		$isoniazidResult = $this->input->post('isoniazidResult');
		$rifampicinResult = $this->input->post('rifampicinResult');
		$ethambutolResult = $this->input->post('ethambutolResult');
		$pyrazinamideResult = $this->input->post('p2aResult');
		$medTechID = $this->input->post('medTech');

		$data1 = array(
			'Streptomycin' => $streptomycinResult,
			'Isoniazid' => $isoniazidResult,
			'Rifampicin' => $rifampicinResult,
			'Ethambutol' => $ethambutolResult,
			'Pyrazinamide'=> $pyrazinamideResult,
			'DSTReportDate' => $dateProc,
			'EmployeeID' => $medTechID,
			'WorkupRequestID' => 1,
			'TransactionLogID' => $lastID
		);
		$this->db->insert('dstresultlog', $data1);

	}	
}	
?>