<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_controller{
	public function index(){
        $data['userID'] = $this->session->userdata('userID');
        $this->load->view('menu',$data);
    }
}
?>