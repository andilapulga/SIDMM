<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inputper extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_inputper');
		$this->load->helper('url');
		if(!$this->session->userdata("status"))
		redirect("welcome");

	}

	public function index()
	{
		$this->data['ambildesa']= $this->M_inputper->ambildesa();
		$this->load->view('inputper', $this->data);
	}

	// tambah perangkat
	public function tambah(){
	$data=array(
						'username'=>$this->input->post('pusername'),
						'password'=>$this->input->post('ppassword'),
						'nama'=>$this->input->post('pnama'),
						'level'=>$this->input->post('plevel'),
						'id_desa'=>$this->input->post('pid_desa'),
						'no_hp'=>$this->input->post('pNoHp')
						);
	
					$dr=$this->M_inputper->inputdata($data);
echo $dr;
						}
	}
