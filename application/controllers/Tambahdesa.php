<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahdesa extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_tambahdesa');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('tambahdesa');
	}

	public function tambah(){
		$data=array('nama_desa'=>$this->input->post('pnamadesa'));
		echo  $this->M_tambahdesa->inputdata($data);
						}
	}
