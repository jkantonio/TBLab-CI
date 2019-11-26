<?php
class SpecimenCodeAssign extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('SpecimenCodeAssign_Model');
	}

	public function index()
	{
		$data['posts'] = $this->SpecimenCodeAssign_Model->getPosts();
		//check this
		$data['userID'] = $this->session->userdata('userID');
		$data['collection'] = $this->SpecimenCodeAssign_Model->countExistingSpecimen();
		$this->load->view('pages/specimen-code-assign', $data);
	}

	public function add()
	{
		$search = $this->input->post('patientID');
		$this->SpecimenCodeAssign_Model->addSpecimenCode($search);
		$data['userID'] = $this->session->userdata('userID');
		$this->load->view('menu', $data);
	}

}
?>