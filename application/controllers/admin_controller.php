<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
        public function __construct() {
		parent::__construct();

		$this->load->model('admin_model');
	}
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->admin_model->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('admin/dashboard',$data);
        }else{
            redirect('admin_controller/login');
        }
    }
	   
        public function login() {
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
            $this->form_validation->set_rules('username', 'User Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() == TRUE){
                /* $data['mydata'] = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
                
            );*/
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
                
               );
                $checkLogin = $this->admin_model->getRows($con);
                if($checkLogin){
                $this->session->set_userdata('isUserLoggedIn',TRUE);
                $this->session->set_userdata('userId',$checkLogin['id']);
                redirect('admin_controller/account/');
                }
                else{
                    
                     $data['error_msg'] = 'Wrong username or password, please try again.';
                 }
            
            //$this->load->view('admin/test',$data); 
            }
            $this->load->view('admin/login_form', $data);  
        }
        
        
         /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('admin_controller');
    }
    
}
