<?php
class M_input extends CI_Model{

    function inputdata($data){
        $this->db->insert('laporan',$data);
        return $this->db->affected_rows();
    }
}