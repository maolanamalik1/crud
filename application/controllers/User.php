<?php


class User extends CI_Controller{
    public function index()
    {
                $this->load->database();
                $data['judul'] = 'Data siswa';
                $this->load->model('tampilan_model');
                $data['detail']= $this->tampilan_model->getall()->result();

                $this->load->view('tampletes user/header',$data);
                $this->load->view('user/datasiswa_user',$data);
                $this->load->view('tampletes user/footer');
    }
    public function nilai()
    {
        $this->load->database();
        $this->load->model('tampilan_model');
        $data['judul'] = 'Nilai siswa';
        $data['oop'] = $this->tampilan_model->getujianbyabsen();
        $data['iip'] = $this->tampilan_model->nilairapot();
        $this->load->view('tampletes user/header',$data);
        $this->load->view('user/nilaisiswa_user',$data);
        $this->load->view('tampletes user/footer');


    }
    public function printraportsiswa()
    {
        $this->load->database();
        $this->load->model('tampilan_model');
        $data['iip']= $this->tampilan_model->getall2();
        $data['oop']=$this->tampilan_model->nilairapot();
        $data['skt']=$this->tampilan_model->numsakit();
        $data['alpha']=$this->tampilan_model->numalpha();
        $data['izin']=$this->tampilan_model->numizin();

        $this->load->view('user/print_rapot',$data);
    } 
	    public function pdfgenerator(){
        $this->load->database();
        $this->load->library('pdfgenerator');
		$this->load->model('tampilan_model');
        $data['iip']= $this->tampilan_model->getall2();
        $data['oop']=$this->tampilan_model->nilairapot();
        $data['skt']=$this->tampilan_model->numsakit();
        $data['alpha']=$this->tampilan_model->numalpha();
        $data['izin']=$this->tampilan_model->numizin();
    $html = $this->load->view('user/rapotpdf', $data, true);
    $filename = 'report_'.time();
    $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
    }
}