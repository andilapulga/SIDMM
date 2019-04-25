<?php
class M_login extends CI_Model{

    function cek_login($data){
        $this->db->get_where('user',$data);
        return $this->db->affected_rows();
    }
}