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
	    public function excelrapot(){
        $this->load->model('tampilan_model');
        $data['oop']=$this->tampilan_model->raportSiswa2()->result();

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
            $object->getActiveSheet()->setCellValue('A'.$baris,$no++);
            $object->getActiveSheet()->setCellValue('B'.$baris,$mhs->nama);
            $object->getActiveSheet()->setCellValue('C'.$baris,$mhs->ma_pel);
            $object->getActiveSheet()->setCellValue('D'.$baris,$mhs->n_p);
            $object->getActiveSheet()->setCellValue('E'.$baris,$mhs->kkm_p);
            $object->getActiveSheet()->setCellValue('F'.$baris,$mhs->n_k);
            $object->getActiveSheet()->setCellValue('G'.$baris,$mhs->kkm_k);
            $object->getActiveSheet()->setCellValue('H'.$baris,$mhs->ket);

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