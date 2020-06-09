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
        $siswa=$this->db->get_where('user',['username'=>$username])->row_array();
        $oop=$this->db->get_where('login',['username'=>$username])->row_array();
        
        
        
        if($oop){
            if($this->db->get_where('login',['passwod'=>$passwod])->row_array()){
            $data = [
                'username' => $oop['username'],
            ];
            $this->session->set_userdata($data);
            redirect('Home');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            password salah
          </div>');
          redirect('Auth/login');
          
        }

        }
        if($siswa){
            if($this->db->get_where('user',['passwod'=>$passwod])->row_array()){
            $data = [
                'absen'=> $siswa['absen'],
                'nama' => $siswa['nama'],
            ];
            $this->session->set_userdata($data);
            redirect('homeuser');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            password salah
          </div>');
          redirect('Auth/login');
        }

        }
        if($guru){
            if($this->db->get_where('guru',['passwod'=>$passwod])->row_array()){
            $data = [
                'id' => $guru['id'],
                'nama' => $guru['nama'],
            ];
            $this->session->set_userdata($data);
            redirect('homeguru');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            password salah
          </div>');
          redirect('Auth/login');
        }

        }
        else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Username salah
          </div>');
          redirect('Auth/login');
        }
    }
    
    
    public function register()
    {
		$this->load->database();
        $this->load->model('datasiswa_model');
		$data['kel'] = $this->datasiswa_model->getkelas();
        $this->form_validation->set_rules('nama','nama','required|trim');
        
        
        
        if($this->form_validation->run() == false){
            $this->load->view('tampletes/authheader');
            $this->load->view('login/register',$data);
            $this->load->view('tampletes/authfooter');
        }
           else{
            $nama = $this->input->post('nama');
            $absen2 = $this->input->post('absen2');
            $email = $this->input->post('email');
            $kelamin = $this->input->post('kelamin');
            $kelas = $this->input->post('kelas');
            $jurusan = $this->input->post('jurusan');
            $agama = $this->input->post('agama');
            $alamat = $this->input->post('alamat');
            $nis = $this->input->post('nis');
            $username = $this->input->post('username');
            $passwod = $this->input->post('passwod');
            $foto = $_FILES['foto'];
            if($foto='')
        {
    
        }
     else 
     {
        $config['upload_path'] = './assets/foto';
        $config['allowed_types'] = 'jpeg|jpg|png';
    
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            echo 'WAJIB Masukan gambar';
            die();
        } else {
            $foto = $this->upload->data('file_name');
        }
    }
    $data = array(
        'nama' => $nama,
        'absen2' => $absen2,
        'email' => $email,
        'kelamin' => $kelamin,
        'kelas' => $kelas,
        'jurusan' => $jurusan,
        'agama' => $agama,
        'alamat' => $alamat,
        'nis' => $nis,
        'username' => $username,
        'passwod' => $passwod,
        'foto' => $foto,
    
    );
    $this->db->insert('user',$data);;
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
    registrasi berhasil
  </div>');
               redirect("Auth/login");
           } 

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('Auth/login','refresh');
      }
}