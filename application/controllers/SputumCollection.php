<?php
class SputumCollection extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('SputumCollection_Model');
	}

	public function index()
	{
		$row = $this->SputumCollection_Model->getPosts();
		$data['patientID'] = $row['PatientID'];
		$data['patientFN'] = $row['PatientFirstName'];
		$data['patientMN'] = $row['PatientMiddleName'];
		$data['patientLN'] = $row['PatientLastName'];
		$data['bday'] = $row['PatientBirthday'];
		$data['sex'] = $row['PatientSex'];
		$data['colType'] = $row['CollectionType'];
		$data['numDoC'] = $row['NumberOfDaysCollection'];
		$data['reqBy'] = $row['RequestedBy'];
		$data['dateSR'] = $row['DateOfSputumRequest'];




		$data['userID'] = $this->session->userdata('userID');
		$this->load->view('pages/sputum-collection', $data);
	}

	public function add()
	{
		$sputumDate = $this->input->post('sputumDate');
		$patientID = $this->input->post('patientID');
		$this->SputumCollection_Model->addSputumCollection($sputumDate,$patientID);
	}
}
?>