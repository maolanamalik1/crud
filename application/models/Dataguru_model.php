<?php


class Dataguru_model extends CI_Model{
    public function getallDataguru()
    {
        return $this->db->get('guru')-> result_array();
    }
    public function hapusDataGuru($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guru');
    }

    public function tambahDataGuru()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $kelamin = $this->input->post('kelamin');
        $gelar = $this->input->post('gelar');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $ngajar = $this->input->post('ngajar');
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
        echo 'Gagal Upload';
        die();
    } else {
        $foto = $this->upload->data('file_name');
    }
}
$data = array(
    'nama' => $nama,
    'email' => $email,
    'kelamin' => $kelamin,
    'gelar' => $gelar,
    'agama' => $agama,
    'ngajar'=> $ngajar,
    'alamat' => $alamat,
    'foto' => $foto,

);

        $this->db->insert('guru', $data);
    }
    public function getDataGuruByid($id)
    {
        return $this->db->get_where('guru',['id'=>$id])->row_array();
    }
    
    public function ubahDataguruByid($id)
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $kelamin = $this->input->post('kelamin');
        $gelar = $this->input->post('gelar');
        $agama = $this->input->post('agama');
        $ngajar = $this->input->post('ngajar');
        $alamat = $this->input->post('alamat');
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
    'email' => $email,
    'kelamin' => $kelamin,
    'gelar' => $gelar,
    'agama' => $agama,
    'ngajar'=> $ngajar,
    'alamat' => $alamat,
    'username' => $username,
    'passwod' => $passwod,
    'foto' => $foto,

);

        $this->db->where('id', $id);
        $this->db->update('guru', $data);
    }
    public function cariDataguru()
    {
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('ngajar', $keyword);
        return $this->db->get('guru')->result_array();
    }
    public function pilihMapel()
    {
        $pilih = $this->input->post('pilih',true);
        $this->db->like('ngajar',$pilih);
        return $this->db->get('guru')->result_array();
    }
    public function getpilihDataguru($limit,$start)
    {
        return $this->db->get('guru',$limit,$start)-> result_array();
    }
    public function countAllguru()
    {
        return $this->db->get('guru')->num_rows();

    }
    public function getdataguruuser()
    {
        $query = $this->db->get_where('guru',array('id' => $this->session->userdata('id')));
        return $query;
    }
    public function geteditdataguruuser()
    {
        $query = $this->db->get_where('guru',array('id' => $this->session->userdata('id')));
        return $query->result_array();
    }
}