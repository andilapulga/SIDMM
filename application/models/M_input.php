<?php
class M_input extends CI_Model{

    function inputdata($data){
        $this->db->insert('tes',$data);
        return $this->db->affected_rows();
    }

    function get_iddesa($username){
       $data=$this->db->get_where('user', array('username'=>$username))->row();
    return $data->id_desa;
    }
}