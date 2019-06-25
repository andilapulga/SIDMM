<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_input');
		$this->load->helper('url');
		if(!$this->session->userdata("status"))
		redirect("welcome");
	} 

	public function index()
	{
		$this->data['ambildana']= $this->M_input->ambildana();
		$this->load->view('input',$this->data);
		
	}
					

	public function tambah(){
					
		$nama_kegiatan=$this->input->post('pnamakegiatan');
		$jenis_kegiatan=$this->input->post('pjeniskegiatan');
		$tahap_kegiatan= $this->input->post('ptahapkegiatan');
		$tanggal_kegiatan= $this->input->post('ptanggalkegiatan');
		$biaya_bahan= $this->input->post('pbiayabahan');
		$biaya_operasional= $this->input->post('pbiayaoperasional');
		$biaya_takterduga= $this->input->post('pbiayatakterduga');
		$id_dana= $this->input->post('piddana');
		$keberhasilan= $this->input->post('pkeberhasilan');
		$uploaded_images=$this->input->post('puploaded_images');
							
		$data=array(
			'id_desa'=>$this->M_input->get_iddesa($_SESSION['nama']),
			'penanggung_jawab'=>$this->M_input->get_pj($_SESSION['nama']),
			'nama_kegiatan'=>$nama_kegiatan,
			'jenis_kegiatan'=>$jenis_kegiatan,
			'tahap_kegiatan'=>$tahap_kegiatan,
			'tanggal_kegiatan'=>$tanggal_kegiatan,
			'biaya_bahan'=>$biaya_bahan,
			'biaya_operasional'=>$biaya_operasional,
			'biaya_takterduga'=>$biaya_takterduga,
			'total_biaya'=>$biaya_bahan+$biaya_operasional+$biaya_takterduga,
			'id_dana'=>$id_dana,
			'keberhasilan'=>$keberhasilan,
			'uploaded_images'=>$uploaded_images				
						);
						

		$dr=$this->M_input->inputdata($data);
		echo $dr;
	
	}

						function upload()
						{
						 sleep(3);
						 if($_FILES["files"]["name"] != '')
						 {
						  $output = array();
						  $config["upload_path"] = './asset/images/';
						  $config["allowed_types"] = 'gif|jpg|png';
						  $this->load->library('upload', $config);
						  $this->upload->initialize($config);
						  for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
						  {
						   $_FILES["file"]["name"] = $_FILES["files"]["name"][$count];
						   $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
						   $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
						   $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
						   $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];
						   if($this->upload->do_upload('file'))
						   {
							$data = $this->upload->data();
							// var_dump($data);
							array_push($output, $data["file_name"]);
						   }
						  }
						 echo implode( ",", $output); 
						 }
						}

}
