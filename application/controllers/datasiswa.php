<?php


class datasiswa extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->load->library('form_validation');

    }
    public function index()
    {
        $this->load->database();

        $this->load->model('datasiswa_model');
        $data['judul'] = 'Daftar siswa';
        //pagination//
        $this->load->library('pagination');
        //config//
        $config['base_url'] = 'http://localhost/crud/datasiswa/index';
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
        

        $this->load->view('tampletes/header2',$data);
        $this->load->view('datasiswa/index2',$data);
        $this->load->view('tampletes/footer');
}

    public function hapus($absen)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->datasiswa_model->hapusDataSiswa($absen);
        $this->session->set_flashdata('flash','dihapus');
        redirect('datasiswa');

    }
    public function view($absen)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $data['oop'] = $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['nilai'] = $this->datasiswa_model->JoinNilaiuser();
        $this->load->view('tampletes/header2');
        $this->load->view('datasiswa/view',$data);
        $this->load->view('tampletes/footer');


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

        $this->load->view('tampletes/header2');
        $this->load->view('tambah/ubah',$data);
        $this->load->view('tampletes/footer');
    }
    else{
        $this->datasiswa_model->editDatasiswaByabsen($absen);
        $this->session->set_flashdata('flash','diedit');
        redirect('datasiswa');
    }
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $this->load->model('datasiswa_model');
        $data['oop'] = $this->datasiswa_model->getallDatasiswa();
        $this->load->view('laporan_pdf',$data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->strim("laporan_datasiswa.pdf",array('Attachment' =>0));

    }
    public function daftarkelas()
    {
        $data['judul'] = 'Daftar Kelas';

        $this->load->view('tampletes/header2');
        $this->load->view('datasiswa/daftarkelas',$data);
        $this->load->view('tampletes/footer');
    }
	    public function daftarjurusan()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['oop'] = $this->datasiswa_model->getdaftarjurusan();

        $this->load->view('tampletes/header2');
        $this->load->view('datasiswa/daftarjurusan',$data);
        $this->load->view('tampletes/footer');
    }
	    public function editkelas($id)
    {
        $data['oop'] = $this->datasiswa_model->getkelasbyid($id);
        $data['jur'] = $this->datasiswa_model->getdaftarjurusan();
        $data['judul'] = 'edit kelas';
        $this->form_validation->set_rules('nama_kelas','Nama kelas','required');
        $this->form_validation->set_rules('id_jurusan','Nama jurusan','required');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('tampletes/header2');
            $this->load->view('tambah/ubahkelas',$data);
            $this->load->view('tampletes/footer');
        }

        else{
            $this->datasiswa_model->editkelas($id);
            $this->session->set_flashdata('flash','diedit');
            redirect('datasiswa/daftarkelas');
        }
    }
	   public function tambahkelas()
    {
        $data['oop'] = $this->datasiswa_model->getdaftarkelas();
        $data['jur'] = $this->datasiswa_model->getdaftarjurusan();
        $data['judul'] = 'Daftar Kelas';
        $this->form_validation->set_rules('nama_kelas','Nama kelas','required');
        $this->form_validation->set_rules('id_jurusan','Nama jurusan','required');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('tampletes/header2');
            $this->load->view('datasiswa/daftarkelas',$data);
            $this->load->view('tampletes/footer');
        }

        else{
            $this->datasiswa_model->tambahkelas($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('datasiswa/daftarkelas');
        }
    }
	    public function hapuskelas($id)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->datasiswa_model->hapuskelas($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('datasiswa/daftarkelas');

    }
	    public function tambahjurusan()
    {
        $data['oop'] = $this->datasiswa_model->getdaftarjurusan();
        $data['judul'] = 'Daftar Kelas';
        $this->form_validation->set_rules('nama_jurusan','Nama jurusan','required');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('tampletes/header2');
            $this->load->view('datasiswa/daftarjurusan',$data);
            $this->load->view('tampletes/footer');
        }

        else{
            $this->datasiswa_model->tambahjurusan($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('datasiswa/daftarjurusan');
        }
		
    }
	    public function editjurusan($no)
    {
        $data['oop'] = $this->datasiswa_model->getjurusanbyid($no);
        $data['judul'] = 'edit jurusan';
        $this->form_validation->set_rules('nama_jurusan','Nama jurusan','required');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('tampletes/header2');
            $this->load->view('tambah/ubahjurusan',$data);
            $this->load->view('tampletes/footer');
        }

        else{
            $this->datasiswa_model->editjurusan($no);
            $this->session->set_flashdata('flash','diedit');
            redirect('datasiswa/daftarjurusan');
        }
    }
	    public function hapusjurusan($no)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->datasiswa_model->hapusjurusan($no);
        $this->session->set_flashdata('flash','dihapus');
        redirect('datasiswa/daftarjurusan');

    }

}