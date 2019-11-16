<?php
    class Profiles extends CI_Controller{
        public function index(){
            $data['title'] = 'Employee Details';

            $this->load->view('profiles/index', $data);
        }
    }