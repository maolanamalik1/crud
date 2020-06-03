<?php


class datasiswa_model extends CI_Model{
    public function getallDatasiswa()
    {
        return $this->db->get('user')-> result_array();
    }
    public function tambahDataSiswa($data)
    {
        $nama = $this->input->post('nama');
        $absen2 = $this->input->post('absen2');
        $email = $this->input->post('email');
        $kelamin = $this->input->post('kelamin');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $nis = $this->input->post('nis');
        $foto = $_FILES['foto'];
        if($foto='')
    {

    }
 else 
 {
    $config['upload_path'] = './assets/foto';
    $config['allowed_types'] = 'jpeg|jpg|png';

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('foto')) {
        echo 'WAJIB Masukan gambar';
        die();
    } else {
        $foto = $this->upload->data('file_name');
    }
}
$data = array(
    'nama' => $nama,
    'absen2' => $absen2,
    'email' => $email,
    'kelamin' => $kelamin,
    'kelas' => $kelas,
    'jurusan' => $jurusan,
    'agama' => $agama,
    'alamat' => $alamat,
    'nis' => $nis,
    'foto' => $foto,

);
        
        $this->db->insert('user',$data);
    }
    public function hapusDataSiswa($absen)
    {
        $this->db->where('absen', $absen);
        $this->db->delete('user');
    }
    public function getDatasiswaByAbsen($absen)
    {
        return $this->db->get_where('user',['absen'=>$absen])->row_array();
    }
    function edit_siswa($absen,$data)
	{
        $this->db->where('absen', $absen);
        $this->db->update('user',$data);
	} 
	    public function tambahkelas($data)
    {
        $data =[
            "nama_kelas" =>$this->input->post('nama_kelas',true),
            "id_jurusan" =>$this->input->post('id_jurusan',true),
            
            

        ];

        $this->db->insert('kelas', $data);
    }
    public function editkelas($id)
    {
        $data =[
            "nama_kelas" =>$this->input->post('nama_kelas',true),
            "id_jurusan" =>$this->input->post('id_jurusan',true),
            

        ];

        $this->db->where('id',$id);
        $this->db->update('kelas', $data);
    }
    public function hapuskelas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kelas');
    }
    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('absen', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('user')->result_array();
    }
    public function pilihKelas()
    {
        $pilih = $this->input->post('pilih',true);
        $this->db->like('kelas',$pilih);
        return $this->db->get('user')->result_array();
    }
    public function tambahNilaisiswa($data)
    {
        $data =[
            "id_siswa" =>$this->input->post('id_siswa',true),
            "ma_pel" =>$this->input->post('ma_pel',true),
            "n_p" =>$this->input->post('n_p',true),
            "kkm_p" =>$this->input->post('kkm_p',true),
            "n_k" =>$this->input->post('n_k',true),
            "kkm_k" =>$this->input->post('kkm_k',true),
            
            

        ];

        $this->db->insert('nilai', $data);
    }
    public function editNilaisiswa($id)
    {
        $data =[
            "id_siswa" =>$this->input->post('id_siswa',true),
            "ma_pel" =>$this->input->post('ma_pel',true),
            "n_p" =>$this->input->post('n_p',true),
            "kkm_p" =>$this->input->post('kkm_p',true),
            "n_k" =>$this->input->post('n_k',true),
            "kkm_k" =>$this->input->post('kkm_k',true),
            
            

        ];

        $this->db->where('id',$id);
        $this->db->update('nilai', $data);
    }
    public function hapusDataNilai($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nilai');
    }
    public function editDatasiswaByabsen($absen)
    {
        $nama = $this->input->post('nama');
        $absen2 = $this->input->post('absen2');
        $email = $this->input->post('email');
        $kelamin = $this->input->post('kelamin');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $nis = $this->input->post('nis');
        $username = $this->input->post('username');
        $passwod = $this->input->post('passwod');
        $file_lama=$this->input->post('filelama');
        $foto = $_FILES['foto'];
        if($foto='')
    {

    }
 else 
 {
    $config['upload_path'] = './assets/foto';
    $config['allowed_types'] = 'jpeg|jpg|png';

    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('foto')) {
        $foto = $file_lama;
    } else {
        $foto = $this->upload->data('file_name');
        unlink('assets/foto'.$file_lama);
    }
}
$data = array(
    'nama' => $nama,
    'absen2' => $absen2,
    'email' => $email,
    'kelamin' => $kelamin,
    'kelas' => $kelas,
    'jurusan' => $jurusan,
    'agama' => $agama,
    'alamat' => $alamat,
    'nis' => $nis,
    'username' => $username,
    'passwod' => $passwod,
    'foto' => $foto,

);

        $this->db->where('absen',$absen);
        $this->db->update('user', $data);
    }
    public function getpilihDatasiswa($limit,$start)
    {
        return $this->db->get('user',$limit,$start)-> result_array();
    }
    public function countAllsiswa()
    {
        return $this->db->get('user')->num_rows();

    }
    public function countAllnilai()
    {
        return $this->db->get('nilai')->num_rows();

    }
	    public function getdaftarjurusan()
    {
        return $this->db->get_where('jurusan')->result_array();
    }
    public function getkelas()
    {
        return $this->db->get_where('kelas')->result_array();
    }
    public function getjurusan()
    {
        return $this->db->get_where('jurusan')->result_array();
    }
	    public function getdaftarkelas()
    {
        $this->db->select('*');
        $this->db->from('kelas k');
        $this->db->join('jurusan j','k.id_jurusan = j.id');
        $query=$this->db->get_where();
        return $query->result_array();
    }
    public function getall($absen)
    {
        $this->db->select('*');
        $this->db->from('user u');
        $this->db->where('absen',$absen);
        $this->db->join('kelas k','u.id_kelas = k.id');
        $this->db->join('jurusan j','k.id_jurusan = j.id');
        $query=$this->db->get_where();
        return $query->result_array();
    }
	    public function getsiswabykelas($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('user b');
        $this->db->join('kelas u','b.id_kelas = u.id');
        $this->db->limit($limit,$start);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function cariRaportsiswa()
    {
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('id_siswa', $keyword);
        $this->db->from('user b');
        $this->db->join('nilai u','b.absen = u.id_siswa');
        $query=$this->db->get_where();
        return $query->result_array();
    }
    public function raportSiswa()
    {
        $this->db->select('*');
        $this->db->from('user b');
        $this->db->where('absen',$this->session->userdata('absen'));
        $this->db->join('nilai u','b.absen = u.id_siswa');
        $query=$this->db->get_where();
        return $query->result_array();
    }
    public function getraportSiswabyabsen($absen)
    {
        $this->db->select('*');
        $this->db->from('user b');
        $this->db->where('absen',$absen);
        $this->db->join('nilai u','b.absen = u.id_siswa');
        $query=$this->db->get_where();
        return $query->result_array();
    }
	   public function getrekapbyabsen($absen)
    {
        $this->db->select('b.*');
        $this->db->from('rekapabsen b');
        $this->db->where('absen',$absen);
        $this->db->join('user u','b.id_siswa = u.absen');
        $query=$this->db->get_where();
        return $query->result_array();
    }
 
    public function getDatanilaibyid($id)
    {
        return $this->db->get_where('nilai',['id'=>$id])->row_array();
    }
}