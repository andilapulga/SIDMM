<?php
class M_input extends CI_Model{
    public $table='tes';
    public $id='id_lpaoran';
    public $order='DESC';

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
     function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function update_data($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->table,$data);
    }	
    function get_by_id($id)
    {
        $this->db->where('id_lpaoran',$id);
        return $this->db->get($this->table)->row();
    }


} 
