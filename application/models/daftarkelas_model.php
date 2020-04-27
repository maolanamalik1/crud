<?php

class daftarkelas_model extends CI_Model
{
    public function xrpl_satu(){
        return $this->db->get_where("user",array('kelas' => '10 RPL 1'));
    }
    public function xrpl_dua(){
        return $this->db->get_where("user",array('kelas' => '10 RPL 2'));
    }
    public function xirpl_satu(){
        return $this->db->get_where("user",array('kelas' => '11 RPL 1'));
    }
    public function xirpl_dua(){
        return $this->db->get_where("user",array('kelas' => '11 RPL 2'));
    }
    public function xiirpl_satu(){
        return $this->db->get_where("user",array('kelas' => '12 RPL 1'));
    }
    public function xiirpl_dua(){
        return $this->db->get_where("user",array('kelas' => '12 RPL 2'));
    }
    public function xtbg_satu(){
        return $this->db->get_where("user",array('kelas' => '10 TATA BOGA 1'));
    }
    public function xtbg_dua(){
        return $this->db->get_where("user",array('kelas' => '10 TATA BOGA 2'));
    }
    public function xitbg_satu(){
        return $this->db->get_where("user",array('kelas' => '11 TATA BOGA 1'));
    }
    public function xitbg_dua(){
        return $this->db->get_where("user",array('kelas' => '11 TATA BOGA 2'));
    }
    public function xiitbg_satu(){
        return $this->db->get_where("user",array('kelas' => '12 TATA BOGA 1'));
    }
    public function xiitbg_dua(){
        return $this->db->get_where("user",array('kelas' => '12 TATA BOGA 2'));
    }
    public function xtbs_satu(){
        return $this->db->get_where("user",array('kelas' => '10 TATA BUSANA 1'));
    }
    public function xtbs_dua(){
        return $this->db->get_where("user",array('kelas' => '10 TATA BUSANA 2'));
    }
    public function xitbs_satu(){
        return $this->db->get_where("user",array('kelas' => '11 TATA BUSANA 1'));
    }
    public function xitbs_dua(){
        return $this->db->get_where("user",array('kelas' => '11 TATA BUSANA 2'));
    }
    public function xiitbs_satu(){
        return $this->db->get_where("user",array('kelas' => '12 TATA BUSANA 1'));
    }
    public function xiitbs_dua(){
        return $this->db->get_where("user",array('kelas' => '12 TATA BUSANA 2'));
    }
    public function xph_satu(){
        return $this->db->get_where("user",array('kelas' => '10 PERHOTELAN 1'));
    }
    public function xph_dua(){
        return $this->db->get_where("user",array('kelas' => '10 PERHOTELAN 2'));
    }
    public function xiph_satu(){
        return $this->db->get_where("user",array('kelas' => '11 PERHOTELAN 1'));
    }
    public function xiph_dua(){
        return $this->db->get_where("user",array('kelas' => '11 PERHOTELAN 2'));
    }
    public function xiiph_satu(){
        return $this->db->get_where("user",array('kelas' => '12 PERHOTELAN 1'));
    }
    public function xiiph_dua(){
        return $this->db->get_where("user",array('kelas' => '12 PERHOTELAN 2'));
    }
}