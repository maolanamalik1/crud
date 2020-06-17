<?php

class siswaguru extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('Dataguru_model');
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
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->datasiswa_model->getsiswabykelas($config['per_page'],$data['start']);
        $data['kel'] = $this->datasiswa_model->getkelas();

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->datasiswa_model->cariDataSiswa();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->datasiswa_model->pilihKelas();
        }

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/datasiswa_guru',$data);
        $this->load->view('tampleteguru/footer');

    }
    public function view($absen)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $this->load->view('tampleteguru/header',$data);
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
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['kel'] = $this->datasiswa_model->getkelas();
        $data['oop'] = $this->datasiswa_model->getsiswabykelas($config['per_page'],$data['start']);

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->datasiswa_model->cariDataSiswa();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->datasiswa_model->pilihKelas();
        }

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/dafsiswarapot_siswa',$data);
        $this->load->view('tampleteguru/footer');

    }
    public function raport($absen){
        $data['iip']= $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['judul'] = 'Raport siswa';
        $data['oop'] = $this->datasiswa_model->getraportbyabsen($absen);


        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/raportsiswa_siswa',$data);
        $this->load->view('tampleteguru/footer');
    }
    public function edit($absen)
    {
        $data['kelamin'] = ['laki-laki', 'Perempuan'];
        $data['agama'] = ['islam', 'kristen','katolik','hindu','budha','etc'];
        $data['kel'] = $this->datasiswa_model->getkelas();
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->datasiswa_model->getDatasiswaByAbsen($absen);
    
            $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('absen2','Absen','required');
    $this->form_validation->set_rules('nis','Nis','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('kelamin','Kelamin','required');
    $this->form_validation->set_rules('id_kelas','Kelas','required');
    $this->form_validation->set_rules('agama','Agama','required');
    $this->form_validation->set_rules('alamat','Alamat','required');
    
        if ($this->form_validation->run() == FALSE){
    
            $this->load->view('tampleteguru/header',$data);
            $this->load->view('guru/editdatasiswa_guru',$data);
            $this->load->view('tampleteguru/footer');
        }
        else{
            $this->datasiswa_model->editDatasiswaByabsen2($absen);
            $this->session->set_flashdata('flash','diedit');
            redirect('siswaguru');
        }
    }
    public function tambahnilai($absen)
    {
        $data['oop']= $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $this->form_validation->set_rules('id_siswa','id_siswa','required');


        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/tambahnilai_guru');
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->tambahNilaisiswa($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('siswaguru/report');; 
        }
    }
    public function editnilai($id)
    {
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->datasiswa_model->getDatanilaiByid($id);
        $this->form_validation->set_rules('id_siswa','id_siswa','required');


        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/editnilai_guru',$data);
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->editNilaisiswa($id);
            $this->session->set_flashdata('flash','diedit');
            redirect('siswaguru/report');; 
        }
    }
    public function hapus($id)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->datasiswa_model->hapusDataNilai($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('siswaguru/report');

    }
    public function printraport($absen)
    {
        $data['iip']= $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['oop']=$this->datasiswa_model->getraportSiswabyabsen($absen);

        $this->load->view('print/raport',$data);
    } 
     public function rekap()
    {
        $data['judul'] = 'Daftar Rekap siswa';

        //pagination//
        $this->load->library('pagination');
        //config//
        $config['base_url'] = 'http://localhost/crud/siswaguru/rekap/index';
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
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['kel'] = $this->datasiswa_model->getkelas();
        $data['oop'] = $this->datasiswa_model->getsiswabykelas($config['per_page'],$data['start']);

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->datasiswa_model->cariDataSiswa();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->datasiswa_model->pilihKelas();
        }

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/dafrekapabsen_siswa',$data);
        $this->load->view('tampleteguru/footer');

    }
	    public function Rekapabsen($absen){
        $data['iip']= $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['judul'] = 'Rekap Absen Siswa';
        $data['oop'] = $this->datasiswa_model->getrekapbyabsen($absen);


        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/rekapabsensiswa_guru',$data);
        $this->load->view('tampleteguru/footer');
    }
	    public function tambahrekap($absen)
    {
        $data['oop']= $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $this->form_validation->set_rules('hri','Hari','required');
        $this->form_validation->set_rules('tgl','Tanggal','required');
        $this->form_validation->set_rules('kete','Keterangan','required');

        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/tambahrekap_guru');
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->tambahrekap($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('siswaguru/rekap');
        }
    }
	    public function hapusrekap($id)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->datasiswa_model->hapusrekapabsen($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('siswaguru/rekap');

    }
	    public function editrekap($id)
    {
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->datasiswa_model->getrekapbyid($id);
        $data['hari'] = ['SENIN', 'SELASA','RABU','KAMIS','JUMAT'];
        $data['ket'] = ['MASUK', 'SAKIT','IZIN','ALPHA'];
        $this->form_validation->set_rules('hri','Hari','required');
        $this->form_validation->set_rules('tgl','Tanggal','required');
        $this->form_validation->set_rules('kete','Keterangan','required');
        


        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/editrekap_guru',$data);
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->editrekapabsen($id);
            $this->session->set_flashdata('flash','diedit');
            redirect('siswaguru/rekap');
        }
    }
	    public function nilaiujian()
    {
        $data['judul'] = 'Daftar Nilai Ujian siswa';

        //pagination//
        $this->load->library('pagination');
        //config//
        $config['base_url'] = 'http://localhost/crud/siswaguru/nilaiujian/index';
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
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['kel'] = $this->datasiswa_model->getkelas();
        $data['oop'] = $this->datasiswa_model->getsiswabykelas($config['per_page'],$data['start']);

        if($this->input->post('keyword'))
        {
            $data['oop']= $this->datasiswa_model->cariDataSiswa();
        }
        elseif($this->input->post('pilih'))
        {
            $data['oop']= $this->datasiswa_model->pilihKelas();
        }

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/dafnilaiujian_siswa',$data);
        $this->load->view('tampleteguru/footer');

    }
	    public function ujian($absen){
        $data['iip']= $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['judul'] = 'Raport siswa';
        $data['oop'] = $this->datasiswa_model->getujianbyabsen($absen);


        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/nilaiujian_siswa',$data);
        $this->load->view('tampleteguru/footer');
    }
	    public function tambahnilaiujian($absen)
    {
        $data['oop']= $this->datasiswa_model->getDatasiswaByAbsen($absen);
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $this->form_validation->set_rules('semester','Semester','required');
        $this->form_validation->set_rules('mat_pel','Mata pelajaran','required');
        $this->form_validation->set_rules('uh1','Ulangan harian 1','required');
        $this->form_validation->set_rules('uh2','Ulangan harian 2','required');
        $this->form_validation->set_rules('uh3','Ulangan harian 3','required');
        $this->form_validation->set_rules('uh4','Ulangan harian 4','required');
        $this->form_validation->set_rules('uh5','Ulangan harian 5','required');
        $this->form_validation->set_rules('pts','Nilai PTS','required');
        $this->form_validation->set_rules('pas','Nilai PAS','required');
        

        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/tambahnilaiujian_guru');
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->tambahNilaiujian($data);
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('siswaguru/nilaiujian');
        }
    }
    public function hapusujian($id)
    {
        $this->load->database();
        $this->load->model('datasiswa_model');
        $this->datasiswa_model->hapusDataNilaiujian($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('siswaguru/nilaiujian');

    }
    public function editnilaiujian($id)
    {
        $data['detail']= $this->Dataguru_model->getdataguruuser()->result();
        $data['oop'] = $this->datasiswa_model->getDatanilaiujianbyid($id);
        $data['sms'] = ['SEMESTER 1', 'SEMESTER 2'];
        $this->form_validation->set_rules('semester','Semester','required');
        $this->form_validation->set_rules('mat_pel','Mata pelajaran','required');
        $this->form_validation->set_rules('uh1','Ulangan harian 1','required');
        $this->form_validation->set_rules('uh2','Ulangan harian 2','required');
        $this->form_validation->set_rules('uh3','Ulangan harian 3','required');
        $this->form_validation->set_rules('uh4','Ulangan harian 4','required');
        $this->form_validation->set_rules('uh5','Ulangan harian 5','required');
        $this->form_validation->set_rules('pts','Nilai PTS','required');
        $this->form_validation->set_rules('pas','Nilai PAS','required');
        


        if ($this->form_validation->run() == FALSE){

        $this->load->view('tampleteguru/header',$data);
        $this->load->view('guru/editnilaiujian_guru',$data);
        $this->load->view('tampleteguru/footer');
        }

        else{
            $this->datasiswa_model->editNilaiujiansiswa($id);
            $this->session->set_flashdata('flash','diedit');
            redirect('siswaguru/nilaiujian');
        }
    }
	public function pdfgenerator($absen){
        $this->load->library('pdfgenerator');
		$this->load->model('datasiswa_model');
        $data['oop']=$this->datasiswa_model->getraportSiswabyabsen($absen);
		$html = $this->load->view('guru/rapotpdf', $data, true);
		$filename = 'report_'.time();
		$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
    }
    public function excelrapot($absen){
        $this->load->model('datasiswa_model');
        $data['oop']=$this->datasiswa_model->getraportSiswabyab($absen)->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("Maolana malik");
        $object->getProperties()->setLastModifiedBy("Guru");
        $object->getProperties()->setTitle("Raport siswa");

        $object->setActiveSheetIndex();

        $object->getActiveSheet()->setCellValue('A1','NO');
        $object->getActiveSheet()->setCellValue('B1','Nama');
        $object->getActiveSheet()->setCellValue('C1','Mata pelajaran');
        $object->getActiveSheet()->setCellValue('D1','Nilai pengetahuan');
        $object->getActiveSheet()->setCellValue('E1','KKM');
        $object->getActiveSheet()->setCellValue('F1','Nilai keterampilan');
        $object->getActiveSheet()->setCellValue('G1','KKM');
        $object->getActiveSheet()->setCellValue('H1','Keterangan');

        $baris= 2;
        $no = 1;

        foreach($data['oop'] as $mhs){
            $object->getActiveSheet()->setCellValue('A',$baris,$no++);
            $object->getActiveSheet()->setCellValue('B',$baris,$mhs->nama);
            $object->getActiveSheet()->setCellValue('C',$baris,$mhs->ma_pel);
            $object->getActiveSheet()->setCellValue('D',$baris,$mhs->n_p);
            $object->getActiveSheet()->setCellValue('E',$baris,$mhs->kkm_p);
            $object->getActiveSheet()->setCellValue('F',$baris,$mhs->n_k);
            $object->getActiveSheet()->setCellValue('G',$baris,$mhs->kkm_k);
            $object->getActiveSheet()->setCellValue('H',$baris,$mhs->ket);

            $baris++;
        }
        $filename = "raportsiswa".'.xlsx';
        $object->getActiveSheet()->setTitle("raport siswa");
       
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attechment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        
        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}