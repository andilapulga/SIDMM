<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_instruction extends CI_Controller {
   
        function __construct(){
            parent::__construct();		
            $this->load->model('M_show_instruction');
            $this->load->helper('url');
            
        }
        public function index()
	{
	$this->data['show_instruction']=$this->M_show_instruction->get_instruction();
        $this->load->view('show_instruction',$this->data);
		
        }
        
       
}
