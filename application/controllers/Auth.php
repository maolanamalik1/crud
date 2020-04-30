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


        $guru=$this->db->get_where('guru',['username'=>$username])->row_array();
        $guru=$this->db->get_where('guru',['passwod'=>$passwod])->row_array();
        $siswa=$this->db->get_where('user',['username'=>$username])->row_array();
        $siswa=$this->db->get_where('user',['passwod'=>$passwod])->row_array();
        $oop=$this->db->get_where('login',['username'=>$username])->row_array();
        $oop=$this->db->get_where('login',['passwod'=>$passwod])->row_array();
        
        
        if($oop){
            $data = [
                'username' => $oop['username'],
            ];
            $this->session->set_userdata($data);
            redirect('Home');

        }
        if($siswa){
            $data = [
                'nama' => $siswa['nama'],
            ];
            $this->session->set_userdata($data);
            redirect('homeuser');

        }
        if($guru){
            $data = [
                'nama' => $guru['nama'],
            ];
            $this->session->set_userdata($data);
            redirect('homeguru');

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