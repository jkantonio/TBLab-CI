<?php
class Hello extends CI_controller
{
	public function __construct()
	{
		// Default Code Igniter Constructor
		parent::__construct();

		// Load DB Library Manually
		$this->load->database();

		// Load Model
		$this->load->model('Hello_Model');
	}

	public function savedata()
	{
		// Load REG VIEW FORM
		$this->load->view('registration');

		// Check Submit Button
		if ($this->input->post('save'))
		{
			// Get Form Data & Store In Local VAR
			$n = $this->input->post('name');
			$e = $this->input->post('email');
			$m = $this->input->post('mobile');

			// Call Save Records Method of Hello_Model & Pass Variables As Parameter
			$this->Hello_Model->saverecords($n, $e, $m);
			echo "Records Saved Successfully";
		}
	}
}
?>