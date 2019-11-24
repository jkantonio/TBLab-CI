<?php
class StartIncubation_Model extends CI_Model
{

	public function getPosts()
	{
		$search = $this->input->post('patientId');
		$this->db->select('*');
		$this->db->from('patient');
		$this->db->join('sputumrequestlog', 'patient.PatientID = sputumrequestlog.PatientID', 'LEFT');
		$this->db->where('patient.PatientId', $search);
		$query = $this->db->get();
		return $query->result();
	}	

	public function searchSpecimenCode()
	{
		$search = $this->input->post('specimenCode');
		$this->db->select('*');
		$this->db->from('assigncode');
		$this->db->join('startincubation', 'assigncode.SpecimenCode = startincubation.SpecimenCode', 'LEFT');
		$this->db->where('startincubation.SpecimenCode', $search);
		$query = $this->db->get();
		return $query->result();
	}


	public function addSputumCollection()
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
		
		$sputumDate = $this->input->post('sputumDate');

		//update sputumcollectionschedulelog
		//get sputumrequestid with passed patient id
		//getcollectionstartdate from post
	}


	function search($ScheduledDate)
	{
		$query = "INSERT INTO collectionschedule VALUES ('$ScheduledDate', '$FirstName', '$LastName', '$EmbassyCode')";
		$this->db->query($query);
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