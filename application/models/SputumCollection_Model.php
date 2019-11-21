<?php
class SputumCollection_Model extends CI_Model
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

	public function addSputumCollection()
	{
		$sputumDate = $this->input->post('sputumDate');
		$tlogid = '';
		$employeeid = 1;
		$tlistid = 21;
		//$empID = $this->input->post('employeeId');
		//$currentdate = date('Y-m-d H:i:s');

		$sql = "INSERT INTO Transactionlog(TransactionLogID,TransactionListID,EmployeeID,DateTimeOfTransaction) VALUES ('$tlogid','$employeeid', '$tlistid', '$sputumDate')";
		$this->db->query($sql);
		// Insert Sputum Request ID
		// Insert Collection Start Date
		// Insert Transaction Log ID
			// Insert Transaction Log ID 
				// Insert Employee ID
					// Insert DateOfTransaction
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