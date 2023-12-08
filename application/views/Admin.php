<?php
class Admin extends CI_Controller{
        public function __construct(){
            parent::__construct();
           $this->load->model('Admin_model');
        }

        public function index(){
            $result['data']=$this->Admin_model->display_records();
            $this->load->view('admin',$result);
        }



}




?>