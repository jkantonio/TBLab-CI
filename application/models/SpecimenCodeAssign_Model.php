<?php
class SpecimenCodeAssign_Model extends CI_Model
{

	public function getPosts()
	{
		$search = $this->input->post('patientId');
		//check if rows are not 0, if may laman compute for specimen code
		$query = $this->db->query("SELECT * FROM patient LEFT JOIN sputumrequestlog on patient.PatientID = sputumrequestlog.PatientID WHERE patient.patientID = '$search'");
		return $query->result();
	}

	public function countExistingSpecimen(){
		$search = $this->input->post('patientId');
		$query = $this->db->query("SELECT * FROM sputumrequestlog INNER JOIN sputumcollectionschedulelog on sputumrequestlog.SputumRequestID = sputumcollectionschedulelog.SputumRequestID INNER JOIN assigncode ON assigncode.SputumCollectionID = sputumcollectionschedulelog.SputumCollectionID where sputumrequestlog.PatientID = '$search'");
		$existingSpecimen = "A";
		if ($query->num_rows() == 0){
			$existingSpecimen = "A";
		}else if($query->num_rows() == 1){
			$existingSpecimen = "B";
		}else if($query->num_rows() == 2){
			$existingSpecimen = "C";
		}
		return $existingSpecimen;
	}

	public function addSpecimenCode($search)
	{	//search is returning nothing
		//$search = $this->input->post('patientId');
		//get SputumCollectionID\
		//not working because wala mahanap
		$SputumCollectionID = 0;
		$query = $this->db->query("SELECT sputumcollectionschedulelog.SputumCollectionID FROM sputumrequestlog INNER JOIN sputumcollectionschedulelog on sputumrequestlog.SputumRequestID = sputumcollectionschedulelog.SputumRequestID where sputumrequestlog.PatientID = '$search' ORDER BY sputumcollectionschedulelog.SputumCollectionID DESC");
		if($query->num_rows() > 0){
			$row = $query->row_array();
			$row = $query->
			$SputumCollectionID = $row->SputumCollectionID;
		}

		//updating the transaction log
		$employeeID = $this->session->userdata('userID');
        $currentdate = date('Y-m-d');
        $data = array(
            'TransactionListID' => '2',
            'EmployeeID' => $employeeID,
            'DateTimeOfTransaction' => $currentdate
        );
		$this->db->insert('transactionlog', $data);
		
		//get transaction log id from above
		$query = $this->db->query("SELECT * FROM transactionlog ORDER BY TransactionLogID DESC");
        $lastID = 0;
        if ($query->num_rows() > 0){
            $row = $query->row();
            $lastID = $row->TransactionLogID;
		}
		
		$specimenCode = $this->input->post('specimenCode');
		//update asssigncode
		$data1 = array(
			'SpecimenCode' => $specimenCode,
			'SputumCollectionID' => $SputumCollectionID,
			'DateCollected' => $currentdate,
			'TransactionLogID' => $lastID
		);
		$this->db->insert('assigncode', $data1);
		
	}
}	
?>