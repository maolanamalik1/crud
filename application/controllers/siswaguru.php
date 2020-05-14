<?php

class siswaguru extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->load->library('form_validation');

    }
    public function index()
    {
        $data['judul'] = 'Daftar siswa';

        //pagination//
        $this->load->library('pagination');
        //config//
        $config['base_url'] = 'http://localhost/crud/siswaguru/index';
        $config['total_rows'] = $this->datasiswa_model->countAllsiswa();
        $config['per_page'] = 6;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['start']=$this->uri->segment(3);
        $data['oop'] = $this->datasiswa_model->getpilihDatasiswa($config['per_page'],$data['start']);

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->datasiswa_model->cariDataSiswa();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->datasiswa_model->pilihKelas();
        }

        $this->load->view('tampleteguru/header');
        $this->load->view('guru/datasiswa_guru',$data);
        $this->load->view('tampleteguru/footer');

    }
    public function view($absen)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $data['oop'] = $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['nilai'] = $this->datasiswa_model->JoinNilaiuser();
        $this->load->view('tampleteguru/header');
        $this->load->view('guru/viewsiswa_guru',$data);
        $this->load->view('tampleteguru/footer');


    }
    public function report()
    {
        $data['judul'] = 'Daftar raport siswa';

        //pagination//
        $this->load->library('pagination');
        //config//
        $config['base_url'] = 'http://localhost/crud/siswaguru/report/index';
        $config['total_rows'] = $this->datasiswa_model->countAllsiswa();
        $config['per_page'] = 6;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['start']=$this->uri->segment(4);
        $data['oop'] = $this->datasiswa_model->getpilihDatasiswa($config['per_page'],$data['start']);

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->datasiswa_model->cariDataSiswa();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->datasiswa_model->pilihKelas();
        }

        $this->load->view('tampleteguru/header');
        $this->load->view('guru/dafsiswarapot_siswa',$data);
        $this->load->view('tampleteguru/footer');

    }
    public function raport($id){
        $data['judul'] = 'Raport siswa';
        $data['oop'] = $this->datasiswa_model->getraportSiswabyabsen($id);


        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/raportsiswa_siswa',$data);
        $this->load->view('tampleteguru/footer');
    }
    public function edit($absen)
    {
        $data['jurusan'] = ['rekayasa perangkat lunak', 'tata busana', 'tata boga','perhotelan', 'Perjalanan wisata'];
        $data['kelas'] = ['10 RPL 1','10 RPL 2','11 RPL 1','11 RPL 2','12 RPL 1','12 RPL 2','10 TATA BOGA 1','10 TATA BOGA 2','11 TATA BOGA 1','11 TATA BOGA 2','12 TATA BOGA 1','12 TATA BOGA 2','10 TATA BUSANA 1','10 TATA BUSANA 2','11 TATA BUSANA 1','11 TATA BUSANA 2','12 TATA BUSANA 1','12 TATA BUSANA 2','10 PERHOTELAN 1','10 PERHOTELAN 2','11 PERHOTELAN 1','11 PERHOTELAN 2','12 PERHOTELAN 1','12 PERHOTELAN 2'];
        $data['kelamin'] = ['laki-laki', 'Perempuan'];
        $data['agama'] = ['islam', 'kristen','katolik','hindu','budha','etc'];
        $data['oop'] = $this->datasiswa_model->getDatasiswaByAbsen($absen);
    
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('kelamin','Kelamin','required');
        $this->form_validation->set_rules('nis','Nis','required');
    
        if ($this->form_validation->run() == FALSE){
    
            $this->load->view('tampleteguru/header');
            $this->load->view('guru/editdatasiswa_guru',$data);
            $this->load->view('tampleteguru/footer');
        }
        else{
            $this->datasiswa_model->editDatasiswaByabsen($absen);
            $this->session->set_flashdata('flash','diedit');
            redirect('siswaguru');
        }
    }
    public function tambahnilai()
    {
        $this->form_validation->set_rules('id_siswa','id_siswa','required');


        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header');
        $this->load->view('guru/tambahnilai_guru');
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->tambahNilaisiswa($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('siswaguru/raport');; 
        }
    }
    public function editnilai($id)
    {
        $data['oop'] = $this->datasiswa_model->getDatanilaiByid($id);
        $this->form_validation->set_rules('id_siswa','id_siswa','required');


        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header');
        $this->load->view('guru/editnilai_guru',$data);
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->editNilaisiswa($id);
            $this->session->set_flashdata('flash','diedit');
            redirect('siswaguru/raport');; 
        }
    }
    public function hapus($id)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->datasiswa_model->hapusDataNilai($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('siswaguru/raport');

    }
    public function daftarkelas()
    {
        $data['judul'] = 'Daftar Kelas';

        $this->load->view('tampleteguru/header');
        $this->load->view('datasiswa/daftarkelas',$data);
        $this->load->view('tampleteguru/footer');
    }
}