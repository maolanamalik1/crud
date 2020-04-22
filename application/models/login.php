<?php


class login extends CI_Model{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->form('login');
        $this->db->where('username',$post['username']);
        $this->db->where('password',sha1($post['password']));
        $query=$this->db->get();
        return $query;


    }

}