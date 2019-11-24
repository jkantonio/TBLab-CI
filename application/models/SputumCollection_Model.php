<?php
class SputumCollection_Model extends CI_Model
{

	public function getPosts()
	{
		$search = $this->input->post('patientID');
		$this->db->select('*');
		$this->db->from('patient');
		$this->db->join('sputumrequestlog', 'patient.PatientID = sputumrequestlog.PatientID', 'LEFT');
		$this->db->where('patient.PatientID', $search);
		$this->db->order_by('sputumrequestlog.SputumRequestId', 'DESC');
		$query = $this->db->get();
		return $query->row_array();
	}	

	public function addSputumCollection($sputumDate, $patientID)
	{
		//updating the transaction log
		$employeeID = $this->session->userdata('userID');
        $currentdate = date('Y-m-d H:i:s');
        $data = array(
            'TransactionListID' => '1',
            'EmployeeID' => $employeeID,
            'DateTimeOfTransaction' => $currentdate
        );
		$this->db->insert('transactionlog', $data);
		
		//gettransaction log id from above
		$query = $this->db->query("SELECT * FROM transactionlog ORDER BY TransactionLogID DESC");
        $lastID = 0;
        if ($query->num_rows() > 0){
            $row = $query->row();
            $lastID = $row->TransactionLogID;
		}
		
		//get sputumrequestid with passed patient id
		//bug expected, since patient can have alot of sputumrequests, when you use patientID to find sputumrequestID, alot of rows may be returned, for now i limited the sputum request to 1 per patient
		$query1 = $this->db->query("SELECT * FROM SputumRequestLog WHERE PatientID = '$patientID'");
		$sputumRequestID = 0;
		if ($query1->num_rows() > 0){
			$row = $query1->row();
			$sputumRequestID = $row->SputumRequestID;
		}
		
		//update sputumcollectionschedulelog
        $data1 = array(
			'SputumRequestID' => $sputumRequestID,
			'CollectionStartDate' => $sputumDate,
			'TransactionLogID' => $lastID
        );
		$this->db->insert('sputumcollectionschedulelog', $data1);
	}

	/**
	function query()
	{
		//SQL COMMAND

		SELECT concat(p.PatientFirstName,' ',p.PatientLastName) AS "Patient Name", p.PatientBirthday AS "Birthday", 
		 p.PatientSex AS "Sex", s.Embassy as "Embassy", s.CollectionType AS "Collection Type", 
		s.NumberOfDaysCollection AS "# of Days", s.SputumRequestID AS "Sputum Request ID"
		FROM SputumRequestLog AS s, Patient AS p
		WHERE s.PatientID = p.PatientID And s.PatientID = 1484444 and s.RequestStatus = "Pending"
	}
	**/
}	
?>