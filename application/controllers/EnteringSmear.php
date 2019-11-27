<?php
class EnteringSmear extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('EnteringSmear_Model');
	}

    public function index()
	{
		$row = $this->EnteringSmear_Model->getPosts();
		$data['patientID'] = $row['PatientID'];
		$data['patientFN'] = $row['PatientFirstName'];
		$data['patientMN'] = $row['PatientMiddleName'];
		$data['patientLN'] = $row['PatientLastName'];
		$data['userID'] = $this->session->userdata('userID');
        $this->load->view('pages/entering-smear', $data);
	}
}
?>