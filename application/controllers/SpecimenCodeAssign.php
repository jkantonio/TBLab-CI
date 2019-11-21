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
		//$this->data['posts'] = $this->SputumCollection_Model->getPosts();
		//$this->load->view('pages/sputum-collection', $this->data);

		$this->load->view('pages/specimen-code-assign');
	}
}