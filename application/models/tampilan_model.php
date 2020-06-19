<?php


class tampilan_model extends CI_Model{
    public function raportSiswa()
    {
        $this->db->select('*');
        $this->db->from('user b');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->join('nilai u','b.absen = u.id_siswa');
        $query=$this->db->get_where();
        return $query->result_array();
    }
	    public function raportSiswa2()
    {
        $this->db->select('*');
        $this->db->from('user b');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->join('nilai u','b.absen = u.id_siswa');
        $query=$this->db->get_where();
        return $query;
    }
    public function getujianbyabsen()
    {
        $this->db->select('*');
        $this->db->from('nilaiharian b');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->join('user u','b.id_siswa = u.absen');
        $query=$this->db->get_where();
        return $query->result_array();
    }
    public function numsakit()
    {
        $this->db->select('b.*');
        $this->db->from('rekapabsen b');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->where('kete','SAKIT');
        $this->db->join('user u','b.id_siswa = u.absen');
        $query=$this->db->get_where();
        return $query->num_rows();
    }
    public function numizin()
    {
        $this->db->select('b.*');
        $this->db->from('rekapabsen b');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->where('kete','IZIN');
        $this->db->join('user u','b.id_siswa = u.absen');
        $query=$this->db->get_where();
        return $query->num_rows();
    }
    public function numalpha()
    {
        $this->db->select('b.*');
        $this->db->from('rekapabsen b');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->where('kete','ALPHA');
        $this->db->join('user u','b.id_siswa = u.absen');
        $query=$this->db->get_where();
        return $query->num_rows();
    }
    public function getall()
    {
        $this->db->select('*');
        $this->db->from('user u');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->join('kelas k','u.id_kelas = k.id');
        $this->db->join('jurusan j','k.id_jurusan = j.no');
        $query=$this->db->get_where();
        return $query;
    }
    public function getall2()
    {
        $this->db->select('*');
        $this->db->from('user u');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->join('kelas k','u.id_kelas = k.id');
        $this->db->join('jurusan j','k.id_jurusan = j.no');
        $query=$this->db->get_where();
        return $query->result_array();
    }
    public function nilairapot()
    {
        return $this->db->get_where('nilai',['id_siswa'=>$this->session->userdata('absen')])->result_array();
    }
}