<?php
class FinalCultureResult extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('FinalCultureResult_Model');
	}

	public function index()
	{
		$row = $this->FinalCultureResult_Model->getData();
		$data['specimenCode'] = $row['SpecimenCode'];
		$data['patientID'] = $row['PatientID'];
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		$data['ljResult'] = $row['LJFinalResult'];
		$data['mgitResult'] = $row['MGITFinalResult'];
		$this->load->view('pages/final-culture-result',$data);
	}

	public function add(){
		$this->DrugSusceptibilityTest_Model->inputData();
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		$this->load->view('menu',$data);
	}
}
?>