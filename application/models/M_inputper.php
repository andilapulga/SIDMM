<?php
class M_inputper extends CI_Model{

    function inputdata($data){
        $this->db->insert('user',$data);
        return $this->db->affected_rows();
     }

     function ambildesa()
     {
         return $this->db->get('desa')->result();
         
     }
}

