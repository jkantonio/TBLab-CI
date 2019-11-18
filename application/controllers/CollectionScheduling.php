<?php
class CollectionScheduling extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('CollectionScheduling_Model');
	}

	public function savedata()
	{
		// Load View Form
		$this->load->view('pages/collection-scheduling');

		// Check Submit Button
		if($this->input->post('add'))
		{
			// Get Form Data & Store In Local VAR
			$date = $this->input->post('ScheduledDate');
			$fn = $this->input->post('FirstName');
			$ln = $this->input->post('LastName');
			$embcode = $this->input->post('EmbassyCode');

			// Call Save Records Method of CollectionScheduling_Model and pass VARS as parameters
			$this->CollectionScheduling_Model->saverecords($date, $fn, $ln, $embcode);
		}
	}
}