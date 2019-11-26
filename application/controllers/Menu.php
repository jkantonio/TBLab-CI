<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_controller{
	public function index(){
        $data['userID'] = $this->session->userdata('userID');
        $data['priv'] = $this->session->userdata('privilage');
        //call model function to check if user has admin privelages
        //if so, load view menu,admin menu, footer
        $this->load->view('menu',$data);
        //check first if admin
        if($this->session->userdata('privilage') == "admin"){
            $this->load->view('templates/admin-menu');
        }
        $this->load->view('templates/footer');
    }
}
?>