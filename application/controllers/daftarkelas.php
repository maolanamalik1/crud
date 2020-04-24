<?php

class daftarkelas extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('daftarkelas_model');
        $this->load->library('form_validation');

    }
    public function xrplsatu()
    {
        $data['judul']='Daftar kelas X RPL 1';
        $data['oop']=$this->daftarkelas_model->xrpl_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xrpl1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xrpldua()
    {
        $data['judul']='Daftar kelas X RPL 2';
        $data['oop']=$this->daftarkelas_model->xrpl_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xrpl2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xirplsatu()
    {
        $data['judul']='Daftar kelas Xi RPL satu';
        $data['oop']=$this->daftarkelas_model->xirpl_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xirpl1',$data);
        $this->load->view('tampletes/footer');
    }
}