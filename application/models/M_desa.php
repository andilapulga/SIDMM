<?php
class M_desa extends CI_Model{


    function get_laporan($id){
      return $this->db->get_where('tes', array('id_desa'=>$id))->result();
    }
}

