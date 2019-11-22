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
    }

    public function schedEvalDate(){
        //get values from post
        
        $date = $this->input->post('scheduledDate');
        $time = $this->input->post('scheduledTime');
        $sputumCollectionID = $this->input->post('sputumCollectionID');
        $this->PulmonaryEvaluation_Model->setScheduleDate($date,$time,$sputumCollectionID);
        //call model function, pass parameters
    }
}
?>