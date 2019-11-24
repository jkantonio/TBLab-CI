<?php
class DrugSusceptibilityTest extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('DrugSusceptibilityTest_Model');
	}

	public function index()
	{
		$this->load->view('pages/drug-susceptibility-test');
	}
}
?>