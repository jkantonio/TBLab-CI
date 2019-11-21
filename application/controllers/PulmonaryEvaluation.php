<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PulmonaryEvaluation extends CI_controller{
    public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('PulmonaryEvaluation_Model');
    }
    
	public function index(){
        //call search function
        $data['results'] = $this->PulmonaryEvaluation_Model->getSpecimenCode();
        $data['userID'] = $this->session->userdata('userID');
		$this->load->view('pages/pulmonary-evaluation', $data);
        //store return values into data
        //call view function and pass values
    }

    public function searchSpecimen(){

    }
}
?>