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
}