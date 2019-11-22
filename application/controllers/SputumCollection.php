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
		$data['posts'] = $this->SputumCollection_Model->getPosts();
		//check this
		$data['userID'] = $this->session->userdata('userID');
		$this->load->view('pages/sputum-collection', $data);
	}

	public function add(){
		$sputumDate = $this->input->post('sputumDate');
		$this->SputumCollection_Model->addSputumCollection();
		
	}

 	public function search()
	{
		// Load View Form
		$this->load->view('pages/sputum-collection');

		// Check Submit Button
		if($this->input->post('add'))
		{
			// Get Form Data & Store In Local VAR
			$date = $this->input->post('ScheduledDate');
			$fn = $this->input->post('FirstName');
			$ln = $this->input->post('LastName');
			$embcode = $this->input->post('EmbassyCode');

			// Call Save Records Method of CollectionScheduling_Model and pass VARS as parameters
			$this->SputumCollection_Model->saverecords($date, $fn, $ln, $embcode);
		}
	}
}
?>