<?php


class Auth extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->library('form_validation');
    }
    public function login()
    {   
        $data['judul']='WEB-DATA SEKOLAH|LOG-IN';
        $this->form_validation->set_rules('username','username','required|trim');
        $this->form_validation->set_rules('passwod','passwod','required|trim');
        
        if($this->form_validation->run() == false){
        $this->load->view('tampletes/authheader');
        $this->load->view('login/login',$data);
        $this->load->view('tampletes/authfooter');
        }
        else{
            $this->proses();
        }
    }
    
    private function proses()
    {
        $username= $this->input->post('username');
        $passwod = $this->input->post('passwod');

        $oop=$this->db->get_where('login',['username'=>$username])->row_array();
        $oop=$this->db->get_where('login',['passwod'=>$passwod])->row_array();
        
        
        if($oop['level'] == 1){
            redirect('Home');

        }
        if($oop['level'] == 2){
            redirect('homeuser');

        }
        else{
            echo "akun ini tidak terdaftar";
        }
    }
    
    
    public function register()
    {
        $this->form_validation->set_rules('name','name','required|trim');
        $this->form_validation->set_rules('username','username','required|trim');
        
        
        
        if($this->form_validation->run() == false){
            $this->load->view('tampletes/authheader');
            $this->load->view('login/register');
            $this->load->view('tampletes/authfooter');
        }
           else{
               $data = [
                   "name" => $this->input->post('name',true),
                   "username" => $this->input->post('username',true),
                   "passwod" => password_hash($this->input->post('passwod'),PASSWORD_DEFAULT),
                   "level" => 2,
                   
               ];
               $this->db->insert('login',$data);
               redirect("Auth/login");
           } 

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Auth/login','refresh');
      }
}