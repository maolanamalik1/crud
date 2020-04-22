<?php


class dataguru extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('Dataguru_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->database();

        $this->load->model('Dataguru_model');
        $data['judul'] = 'Daftar guru';
        $this->load->library('pagination');
        //config//
        $config['base_url'] = 'http://localhost/crud/dataguru/index';
        $config['total_rows'] = $this->Dataguru_model->countAllguru();
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
        $data['oop'] = $this->Dataguru_model->getpilihDataguru($config['per_page'],$data['start']);

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->Dataguru_model->cariDataguru();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->Dataguru_model->pilihMapel();
        }

        $this->load->view('tampletes/header2',$data);
        $this->load->view('Dataguru/index',$data);
        $this->load->view('tampletes/footer');
    }
    public function hapus($id)
    {
        $this->load->database();
        $this->load->model('Dataguru_model');
        $data['oop'] = $this->Dataguru_model->hapusDataGuru($id);
        redirect('dataguru');

    }
    public function tambah()
    {

    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('kelamin','Kelamin','required');

    if ($this->form_validation->run() == FALSE){

        $this->load->view('tampletes/header2');
        $this->load->view('data/tambahguru');
        $this->load->view('tampletes/footer');
    }
    else{
        $this->Dataguru_model->tambahDataguru();
        $this->session->set_flashdata('flash','ditambahkan');
        redirect('dataguru');
    }
    }

    public function view($id)
    {
        $this->load->database();
        $data['oop'] = $this->Dataguru_model->getDataGuruByid($id);
        $this->load->view('tampletes/header2');
        $this->load->view('dataguru/view',$data);
        $this->load->view('tampletes/footer');
        


    }
    public function edit($id)
    {
    $data['Mapel'] = ['MATEMATIKA', 'AGAMA ISLAM', 'PENDIDIKAN PANCASILA','B INDONESIA', 'MATEMATIKA' , 'B INGGRIS' , 'SEJARAH' , 'SENIBUDAYA', 'PENJAS' , 'GURU BIDANG KEAHLIAN', 'ILMU PENGETAHUAN ALAM'];
    $data['kelamin'] = ['laki-laki', 'Perempuan'];
    $data['agama'] = ['islam', 'kristen','katolik','hindu','budha','etc'];
    $data['oop'] = $this->Dataguru_model->getDataGuruByid($id);

    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('kelamin','Kelamin','required');

    if ($this->form_validation->run() == FALSE){

        $this->load->view('tampletes/header2');
        $this->load->view('tambah/ubahguru',$data);
        $this->load->view('tampletes/footer');
    }
    else{
        $this->Dataguru_model->ubahDataguruByid($id);
        $this->session->set_flashdata('flash','diedit');
        redirect('dataguru');
    }
    }
}