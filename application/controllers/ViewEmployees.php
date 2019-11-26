<?php
class ViewEmployees extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('ViewEmployees_Model');
	}

	public function index()
	{
		//$data['posts'] = $this->StartIncubation_Model->getPosts();
		//check this
		$data['userID'] = $this->session->userdata('userID');
		$data['priv'] = $this->session->userdata('privilage');
		$data['posts'] = $this->ViewEmployees_Model->getTrans();
		$this->load->view('pages/view-employees.php',$data);
	}
}
?>