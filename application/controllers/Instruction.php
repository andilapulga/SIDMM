<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instruction extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_instruction');//call model
		$this->load->helper('url');
		if(!$this->session->userdata("status"))//redirect to welcome page
		redirect("welcome");
	}
	// load view
    public function index()
	{
        $this->load->view('instruction');
        
	}
	// add instruction
	public function add_instruction(){
	$data=array(
						'instruksi'=>$t=$this->input->post('pinstruction'),
						'judul'=>$t=$this->input->post('ptitle')
					
						);
    
					$dr=$this->M_instruction->inputdata($data);
echo $dr;
						}
	}
