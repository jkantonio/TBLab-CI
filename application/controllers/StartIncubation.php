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
		//$data['posts'] = $this->StartIncubation_Model->getPosts();
		//check this
		//$data['userID'] = $this->session->userdata('userID');
		//$this->load->view('pages/start-incubation', $data);
		$this->load->view('pages/start-incubation');
	}

	public function add()
	{
		$sputumDate = $this->input->post('sputumDate');
		$this->SputumCollection_Model->addSputumCollection();
	}

	public function pdf()
	{
	    $this->load->helper('pdf_helper');
	    /*
	        ---- ---- ---- ----
	        your code here
	        ---- ---- ---- ----
	    */
	    $this->load->view('pages/pdfreport', $data);
	}
}
?>