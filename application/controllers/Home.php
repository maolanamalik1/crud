<?php


class Home extends CI_Controller{
    public function index()
    {
        $this->load->model('datasiswa_model');
        $this->load->model('Dataguru_model');
        $data['total_guru'] = $this->Dataguru_model->countAllguru();
        $data['total_siswa'] = $this->datasiswa_model->countAllsiswa();
        $data['judul'] = 'Dashbord';
        $this->load->view('tampletes/header2', $data);
        $this->load->view('home/index',$data);
        $this->load->view('tampletes/footer');
    }
}