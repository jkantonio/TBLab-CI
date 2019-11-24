<?php
class EncodeMGITResult extends CI_controller
{
	public function __construct()
	{
		// Code Igniter Default Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('EncodeMGITResult_Model');
	}

	public function index()
	{
		$this->load->view('pages/encode-mgit-result');
	}
}
?>