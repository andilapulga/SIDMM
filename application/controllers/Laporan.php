<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_laporan');
	}
	
	public function index(){
		$x['data']=$this->M_laporan->show_barang();
		$this->load->view('v_laporan',$x);
	}
}
