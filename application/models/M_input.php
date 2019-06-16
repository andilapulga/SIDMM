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
    function get_pj($username){
        $data=$this->db->get_where('user', array('username'=>$username))->row();
     return $data->nama;
     }

    // function inputdana($data){
    //     $this->db->insert('user',$data);
    //     return $this->db->affected_rows();
    //  }

     function ambildana()
     {
         return $this->db->get('dana')->result();
         
     }


} 
