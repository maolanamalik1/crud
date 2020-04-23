<?php

class daftarkelas_model extends CI_Model
{
    public function xrpl_satu(){
        return $this->db->get_where("user",array('kelas' => '10 RPL 1'));
    }
    public function xrpl_dua(){
        return $this->db->get_where("user",array('kelas' => '10 RPL 2'));
    }
}