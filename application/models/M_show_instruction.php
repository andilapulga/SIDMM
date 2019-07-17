<?php
class M_show_instruction extends CI_Model{
  public $table='instruksi';
  public $id='id_instruksi';
  public $order='DESC';

    function get_instruction(){
    // $this->db->where('id_instruksi',$id);
    return $this->db->get($this->table)->result();
        
  }
}