<?php


class User extends CI_Controller{
    public function index()
    {
                $this->load->database();
                $data['judul'] = 'Data siswa';
                $this->load->model('datasiswa_model');
                //pagination//
                $this->load->library('pagination');
                //config//
                $config['base_url'] = 'http://localhost/crud/user/index';
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


                $this->load->view('tampletes user/header',$data);
                $this->load->view('user/datasiswa_user',$data);
                $this->load->view('tampletes user/footer');
    }
    public function view($absen)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $data['judul'] = 'Detail siswa';
        $data['oop'] = $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $this->load->view('tampletes user/header',$data);
        $this->load->view('user/viewsiswa_user',$data);
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
}