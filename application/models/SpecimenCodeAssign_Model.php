<?php
class SpecimenCodeAssign_Model extends CI_Model
{

	// Needed values are Patient Name, Patient Birthday, Patient Sex and Embassy
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

	public function assignSpecimenCode()
	{
		// Assigning a Specimen Code
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
}	
?>