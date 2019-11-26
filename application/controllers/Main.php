<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_controller{
	public function index(){
		$this->login();
	}

	public function login(){
		$data['title'] = "login form";
		$this->load->view("login",$data);
	}

	function enter(){
		if($this->session->userdata('userID') != ''){
			$data['userID'] = $this->session->userdata('userID');
			$data['priv'] = $this->session->userdata('privilage');
			//$this->load->view("menu",$data);
			redirect(base_url() . 'menu');
		}else{
			redirect(base_url());
		}
		
	}

	function logout(){
		$this->session->unset_userdata('userID');
		redirect(base_url());
	}

	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run()){
			$userID = $this->input->post('username');
			$password = $this->input->post('password');
			//model function
			$this->load->model('Main_model');
			if($this->Main_model->can_login($userID,$password)){
				//we found a user
				
				//check what privilage
				$row = $this->Main_model->check_priv($userID);
				$privilage = $row->UserAccountType;
				$session_data = array(
					'userID' => $userID,
					'privilage' => $privilage
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'main/enter');
			}else{
				//no user was found
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect(base_url());
			}

		}else{
			$this->login();
		}
	}
}
?>