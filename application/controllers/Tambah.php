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
        $this->form_validation->set_rules('nis','Nis','required');

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
