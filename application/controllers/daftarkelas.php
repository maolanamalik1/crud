<?php

class daftarkelas extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
        $this->load->model('daftarkelas_model');
        $this->load->library('form_validation');

    }
    public function xrplsatu()
    {
        $data['judul']='Daftar kelas X RPL 1';
        $data['oop']=$this->daftarkelas_model->xrpl_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xrpl1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xrpldua()
    {
        $data['judul']='Daftar kelas X RPL 2';
        $data['oop']=$this->daftarkelas_model->xrpl_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xrpl2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xirplsatu()
    {
        $data['judul']='Daftar kelas Xi RPL satu';
        $data['oop']=$this->daftarkelas_model->xirpl_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xirpl1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xirpldua()
    {
        $data['judul']='Daftar kelas Xi RPL dua';
        $data['oop']=$this->daftarkelas_model->xirpl_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xirpl2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiirplsatu()
    {
        $data['judul']='Daftar kelas Xii RPL satu';
        $data['oop']=$this->daftarkelas_model->xiirpl_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiirpl1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiirpldua()
    {
        $data['judul']='Daftar kelas Xii RPL dua';
        $data['oop']=$this->daftarkelas_model->xiirpl_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiirpl2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xtbgsatu()
    {
        $data['judul']='Daftar kelas X TBG satu';
        $data['oop']=$this->daftarkelas_model->xtbg_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xtbg1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xtbgdua()
    {
        $data['judul']='Daftar kelas X TBG dua';
        $data['oop']=$this->daftarkelas_model->xtbg_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xtbg2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xitbgsatu()
    {
        $data['judul']='Daftar kelas XI TBG satu';
        $data['oop']=$this->daftarkelas_model->xitbg_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xitbg1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xitbgdua()
    {
        $data['judul']='Daftar kelas XI TBG dua';
        $data['oop']=$this->daftarkelas_model->xitbg_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xitbg2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiitbgsatu()
    {
        $data['judul']='Daftar kelas XII TBG satu';
        $data['oop']=$this->daftarkelas_model->xiitbg_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiitbg1',$data);
        $this->load->view('tampletes/footer');
    }
 
    public function xiitbgdua()
    {
        $data['judul']='Daftar kelas XII TBG dua';
        $data['oop']=$this->daftarkelas_model->xiitbg_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiitbg2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xtbssatu()
    {
        $data['judul']='Daftar kelas X TBS satu';
        $data['oop']=$this->daftarkelas_model->xtbs_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xtbs1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xtbsdua()
    {
        $data['judul']='Daftar kelas X TBS dua';
        $data['oop']=$this->daftarkelas_model->xtbs_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xtbs2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xitbssatu()
    {
        $data['judul']='Daftar kelas XI TBS satu';
        $data['oop']=$this->daftarkelas_model->xitbs_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xitbs1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xitbsdua()
    {
        $data['judul']='Daftar kelas XI TBS dua';
        $data['oop']=$this->daftarkelas_model->xitbs_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xitbs2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiitbssatu()
    {
        $data['judul']='Daftar kelas XII TBS satu';
        $data['oop']=$this->daftarkelas_model->xiitbs_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiitbs1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiitbsdua()
    {
        $data['judul']='Daftar kelas XII TBS dua';
        $data['oop']=$this->daftarkelas_model->xiitbs_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiitbs2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xphsatu()
    {
        $data['judul']='Daftar kelas X PH satu';
        $data['oop']=$this->daftarkelas_model->xph_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xph1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xphdua()
    {
        $data['judul']='Daftar kelas X PH dua';
        $data['oop']=$this->daftarkelas_model->xph_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xph2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiphsatu()
    {
        $data['judul']='Daftar kelas XI PH satu';
        $data['oop']=$this->daftarkelas_model->xiph_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiph1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiphdua()
    {
        $data['judul']='Daftar kelas XI PH dua';
        $data['oop']=$this->daftarkelas_model->xiph_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiph2',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiiphsatu()
    {
        $data['judul']='Daftar kelas XII PH satu';
        $data['oop']=$this->daftarkelas_model->xiiph_satu()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiiph1',$data);
        $this->load->view('tampletes/footer');
    }
    public function xiiphdua()
    {
        $data['judul']='Daftar kelas XII PH dua';
        $data['oop']=$this->daftarkelas_model->xiiph_dua()->result_array();

        $this->load->view('tampletes/header2');
        $this->load->view('daftarkelas/xiiph2',$data);
        $this->load->view('tampletes/footer');
    }

    
    public function printxrplsatu()
    {
        $data['oop']=$this->daftarkelas_model->xrpl_satu()->result_array();

        $this->load->view('print/xrpl1',$data);
    }
    public function printxrpldua()
    {
        $data['oop']=$this->daftarkelas_model->xrpl_dua()->result_array();

        $this->load->view('print/xrpl2',$data);
    }
    public function printxirplsatu()
    {
        $data['oop']=$this->daftarkelas_model->xirpl_satu()->result_array();

        $this->load->view('print/xirpl1',$data);
    }
    public function printxirpldua()
    {
        $data['oop']=$this->daftarkelas_model->xirpl_dua()->result_array();

        $this->load->view('print/xirpl2',$data);
    }
    public function printxiirplsatu()
    {
        $data['oop']=$this->daftarkelas_model->xiirpl_satu()->result_array();

        $this->load->view('print/xiirpl1',$data);
    }
    public function printxiirpldua()
    {
        $data['oop']=$this->daftarkelas_model->xiirpl_dua()->result_array();

        $this->load->view('print/xiirpl2',$data);
    }


}