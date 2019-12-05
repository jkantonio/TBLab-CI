<?php
class PulmonaryEvaluation_Model extends CI_Model
{
    public function getPosts()
    {
        $search = $this->input->post('patient');
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->join('sputumrequestlog', 'patient.PatientID = sputumrequestlog.PatientID', 'LEFT');
        $this->db->where('patient.PatientID', $search);
        $this->db->order_by('sputumrequestlog.SputumRequestId', 'DESC');
        $query = $this->db->get();
        return $query->row_array();
    }   

	public function getSpecimenCode(){
        $search = $this->input->post('patient');
        $this->db->select('assigncode.SpecimenCode');
        $this->db->select('patient.PatientFirstName');
        $this->db->select('patient.PatientMiddleName');
        $this->db->select('patient.PatientLastName');
        $this->db->select('patient.PatientID');
        $this->db->select('assigncode.SputumCollectionID');
		$this->db->from('patient');
        $this->db->join('sputumrequestlog', 'patient.PatientID = sputumrequestlog.PatientID', 'RIGHT');
        $this->db->join('sputumcollectionschedulelog', 'sputumrequestlog.SputumRequestID = sputumcollectionschedulelog.SputumRequestID', 'RIGHT');
        $this->db->join('assigncode', 'sputumcollectionschedulelog.SputumCollectionID = assigncode.SputumCollectionID', 'RIGHT');
		$this->db->where('patient.PatientId', $search);
		$query = $this->db->get();
        return $query->result();
    }

    public function setScheduleDate($date, $time, $sputumCollectionID){
        //how to record this in log
        $employeeID = $this->session->userdata('userID');
        $currentdate = date('Y-m-d H:i:s');
        $data = array(
            'TransactionListID' => '3',
            'EmployeeID' => $employeeID,
            'DateTimeOfTransaction' => $currentdate
        );
        $this->db->insert('transactionlog', $data);

        $query = $this->db->query("SELECT * FROM transactionlog ORDER BY TransactionLogID DESC");
        $lastID = 0;
        if ($query->num_rows() > 0){
            $row = $query->row();
            $lastID = $row->TransactionLogID;
        }

        $data1 = array(
            'SputumCollectionID' => $sputumCollectionID,
            'TransactionLogID' => $lastID,
            'PulmonaryEvaluationDate' => $date,
            'PulmonaryEvaluationTime' => $time
        );
        $this->db->insert('pulmonaryevaluationschedulelog', $data1);

        return 'succesful';
    }
}	
?>