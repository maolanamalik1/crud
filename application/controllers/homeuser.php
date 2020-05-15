<?php


class homeuser extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->load->model('datasiswa_model');
        $this->load->model('Dataguru_model');
        $data['total_guru'] = $this->Dataguru_model->countAllguru();
        $data['total_siswa'] = $this->datasiswa_model->countAllsiswa();


        
        $data['oop'] = $this->datasiswa_model->raportSiswa();
        $this->load->view('tampletes user/header', $data);
        $this->load->view('user/dashbord_user',$data);
        $this->load->view('tampletes user/footer');
    }
}