<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inputper extends CI_Controller {

	/*
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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
						'no_hp'=>$this->input->post('pNoHp')
						);
	
					$dr=$this->M_inputper->inputdata($data);
echo $dr;
						}
	}
