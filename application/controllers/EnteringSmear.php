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
		$data['specimenCode'] = $row['SpecimenCode'];
		$data['patientID'] = $row['PatientID'];
		$data['userID'] = $this->session->userdata('userID');
        $data['priv'] = $this->session->userdata('privilage');
        $this->load->view('pages/entering-smear', $data);
	}

	public function add(){
		$this->EnteringSmear_Model->inputData();
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		$this->load->view('menu',$data);
	}
}
?>