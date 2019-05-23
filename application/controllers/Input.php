<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_input');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('input');
		
	}



						public function tambah(){
					
							$nama_kegiatan=$this->input->post('pnamakegiatan');
							$jenis_kegiatan=$this->input->post('pjeniskegiatan');
							$tahap_kegiatan= $this->input->post('ptahapkegiatan');
							$tanggal_kegiatan= $this->input->post('ptanggalkegiatan');
						

						$data=array(
						'id_desa'=>$this->M_input->get_iddesa($_SESSION['nama']),
						'nama_kegiatan'=>$nama_kegiatan,
						'jenis_kegiatan'=>$jenis_kegiatan,
						'tahap_kegiatan'=>$tahap_kegiatan,
						'tanggal_kegiatan'=>$tanggal_kegiatan
					
						);
					$dr=$this->M_input->inputdata($data);
echo $dr;
						}

}
