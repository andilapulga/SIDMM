<?php
class M_masyarakat extends CI_Model{


    function get_laporan($id){
      return $this->db->get_where('tes', array('id_desa'=>$id))->result();
    }
    function get_detail($id_laporan){
      return $this->db->get_where('tes', array('id_lpaoran'=>$id_laporan))->row();
    }


    
}

