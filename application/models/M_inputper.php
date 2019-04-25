<?php
class M_inputper extends CI_Model{

    function inputdata($data){
        $this->db->insert('perangkat',$data);
        return $this->db->affected_rows();
    }
}

