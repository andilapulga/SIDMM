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
						$data=array(
						'username'=>$this->input->post('pusername'),
						'nama_kegiatan'=>$this->input->post('pnamaKegiatan'),
						'jenis_kegiatan'=>$this->input->post('pjenisKegiatan'),
						'jenis_anggaran'=>$this->input->post('pjenisAnggaran'),
						'tahap_kegiatan'=>$this->input->post('ptahap'),
						'tanggal_kegiatan'=>$this->input->post('ptanggal'),
						'biaya_bahan'=>$this->input->post('pbiayabahan'),
						'biaya_operasional'=>$this->input->post('pbiayaOP'),
						'biaya_takterduga'=>$this->input->post('biayatak'),
						'total_biaya'=>$this->input->post('ptotal'),
						'presentase_keberhasilan'=>$this->input->post('ppres'),
						'penanggung_jawab'=>$this->input->post('ppj'),
						'dokumentasi'=>$this->input->post('pdok'),
						'no_hp'=>$this->input->post('pNoHp')
						
						);
					$dr=$this->M_input->inputdata($data);
echo $dr;
						}

}
