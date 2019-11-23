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
		$this->load->library('Pdf');
	}

	public function index()
	{
		$data['posts'] = $this->SputumCollection_Model->getPosts();
		//check this
		$data['userID'] = $this->session->userdata('userID');
		$this->load->view('pages/sputum-collection', $data);
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