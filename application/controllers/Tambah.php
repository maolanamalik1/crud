<?php


class Tambah extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->load->library('form_validation');
    }
    public function tambah()
    {
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('absen2','Absen','required');
        $this->form_validation->set_rules('nis','Nis','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('kelamin','Kelamin','required');
        $this->form_validation->set_rules('id_kelas','Kelas','required');
        $this->form_validation->set_rules('agama','Agama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('passwod','Password','required');
		$data['kel'] = $this->datasiswa_model->getkelas();

        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampletes/header2');
        $this->load->view('data/tambah');
        $this->load->view('tampletes/footer');
        }

        else{
            $this->datasiswa_model->tambahDataSiswa($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('datasiswa');; 
        }


    }

}
