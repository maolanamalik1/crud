<?php

class guruguru extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('Dataguru_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['judul'] = 'Daftar guru';
        $this->load->library('pagination');
        //config//
        $config['base_url'] = 'http://localhost/crud/guruguru/index';
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
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->Dataguru_model->getpilihDataguru($config['per_page'],$data['start']);

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->Dataguru_model->cariDataguru();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->Dataguru_model->pilihMapel();
        }

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/dataguru_guru',$data);
        $this->load->view('tampleteguru/footer');
    }
    public function view($id)
    {
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->Dataguru_model->getDataGuruByid($id);
        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/viewguru_guru',$data);
        $this->load->view('tampleteguru/footer');
        


    }
}