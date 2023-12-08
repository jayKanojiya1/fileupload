<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');

    }
    public function index(){
        $this->load->view('login');
    }
    public function validation(){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('email','Email','required|valid_emails');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
             //true  
             $email = $this->input->post('email');  
             $password = $this->input->post('password');  
             //model function  
               
             if($this->Login_model->can_login($email, $password))  
             {  
                  $session_data = array(  
                       'email'     =>     $email  
                  );  
                  $this->session->set_userdata($session_data);  
                  redirect(base_url() . 'login/admin');  
             }  
             else  
             {  
                  $this->session->set_flashdata('error', 'Invalid Username and Password');  
                  redirect(base_url() . 'login');  
             }  
            
            
        }else{
        
            $this->load->view('login');

        }
    }

   public function admin(){  
        if($this->session->userdata('email') != '')  
        {  
             echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';  
            
        }  
        else  
        {  
             redirect(base_url() . 'login');  
        }  
   } 
}
?>