<?php
class EncodeLJResult extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('EncodeLJResult_Model');
	}

	public function index()
	{
		$row = $this->EncodeLJResult_Model->getData();
		$data['specimenCode'] = $row['SpecimenCode'];
		$data['patientID'] = $row['PatientID'];
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		$this->load->view('pages/encode-lj-result', $data);
	}

	public function add(){
		$this->EncodeLJResult_Model->inputData();
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		$this->load->view('menu',$data);
	}
}
?>