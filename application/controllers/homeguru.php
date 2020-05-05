<?php

class homeguru extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'dashboard';
        $this->load->model('datasiswa_model');
        $this->load->model('Dataguru_model');
        $data['total_guru'] = $this->Dataguru_model->countAllguru();
        $data['total_siswa'] = $this->datasiswa_model->countAllsiswa();

        $this->load->view('tampleteguru/header');
        $this->load->view('guru/dashboard_guru',$data);
        $this->load->view('tampleteguru/footer');
        
    }
}