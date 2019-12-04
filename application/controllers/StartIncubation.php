<?php
class StartIncubation extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('StartIncubation_Model');
	}

	public function index()
	{
		$row = $this->StartIncubation_Model->getPosts();
		$data['specimenCode'] = $row['SpecimenCode'];
		$data['patientID'] = $row['PatientID'];
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		if($this->input->post('add')){
			$this->start();
		}else{
			$this->load->view('pages/start-incubation', $data);
		}
	}

	public function start(){
		$this->StartIncubation_Model->add();
		$data['userID'] = $this->session->userdata('userID');
        $data['priv'] = $this->session->userdata('privilage');
		$this->load->view('menu',$data);
	}
}
?>