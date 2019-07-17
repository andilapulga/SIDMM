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

		public function edit($id){
							// $id ='id_lpaoran';
							// $where = array('id_lpaoran' => $id);
							// $data['tes'] = $this->M_input->edit_data($where,'tes')->result();
							// $this->load->view('edit_laporan');
		$row = $this->M_input->get_by_id($id);
		$this->data['edit_laporan'] = $this->M_input->get_by_id($id);


		if($row)
		{
		$this->data['page']          = 'Input';
		$this->data['action']         = base_url('input/update_aksi');
		$this->data['button_submit']  = 'Submit';
		$this->data['button_reset']   = 'Reset';

		$this->data['id_lpaoran'] = array(
		'name'  => 'id_lpaoran',
		'id'    => 'id_lpaoran',
		'type' => 'hidden',
    );
    $this->data['nama_kegiatan'] = array(
    'name'  => 'nama_kegiatan',
    'id'    => 'nama_kegiatan',
    'class' => 'form-control',
    );
		
		$this->data['jenis_kegiatan'] = array(
		'name'  => 'jenis_kegiatan',
		'id'    => 'jenis_kegiatan',
		'class' => 'form-control',
		);
		$this->data['tahap_kegiatan'] = array(
		'name'  => 'tahap_kegiatan',
		'id'    => 'tahap_kegiatan',
		'class' => 'form-control',
		);
		$this->data['biaya_bahan'] = array(
			'name'  => 'biaya_bahan',
			'id'    => 'biaya_bahan',
			'class' => 'form-control',
			);

		$this->data['biaya_operasional'] = array(
			'name'  => 'biaya_operasional',
			'id'    => 'biaya_operasional',
			'class' => 'form-control',
			);
		$this->data['biaya_takterduga'] = array(
			'name'  => 'biaya_takterduga',
			'id'    => 'biaya_takterduga',
			'class' => 'form-control',
			);
		$this->data['id_dana'] = array(
			'name'  => 'id_dana',
			'id'    => 'id_dana',
			'class' => 'form-control',
			);

			$this->data['keberhasilan'] = array(
				'name'  => 'keberhasilan',
				'id'    => 'keberhasilan',
				'class' => 'form-control',
				);
		
		// $this->data['id_kategoriberita'] = array(
		// 'name'  => 'id_kategoriberita',
		// 'id'    => 'id_kategoriberita',
		// 'class' => 'form-control',
		// 'onChange' => 'tampilSubkat()',
		// 'required' => '',
				
		// );
		
	
		// $this->data['ambil_kategori'] = $this->Inputmodel->ambil_kategori();

		// $this->data['input'] = $this->Inputmodel->insert($data);
		$this->load->view('edit_laporan',$this->data);
		
	}
	else{echo 'data tidak ada';}
	}
	
// 	public function update_aksi()
//   {
//     $this->load->helper('clean');
//     $this->_rules();
  
//     if ($this->form_validation->run() == FALSE)
//     {
//       $this->d($this->input->post('id_berita'));
    
//     }
//       else
//       {
//         /* 4 adalah menyatakan tidak ada file yang diupload*/
//         // if ($_FILES['gambarberita']['error'] <> 4)
//         // {
//         //   $nmfile = strtolower(url_title($this->input->post('namauser'))).date('YmdHis');

//         //   /* memanggil library upload ci */
//         //   $config['upload_path']      = 'asset/img/';
//         //   $config['allowed_types']    = 'jpg|jpeg|png|gif';
//         //   $config['max_size']         = '2048'; // 2 MB
//         //   $config['file_name']        = $nmfile; //nama yang terupload nantinya

//         //   $this->load->library('upload', $config);

//         //   if (!$this->upload->do_upload('gambarberita'))
//         //   {
//         //     //file gagal diupload -> kembali ke form tambah
//         //     $error = array('error' => $this->upload->display_errors());
//         //     // $this->session->set_flashdata('message', '<div class="alert alert-danger alert">'.$error['error'].'</div>');

//         //     $this->input();
//         //   }
//         //     // file berhasil diupload -> lanjutkan ke query INSERT
//         //     else
//         //     {
//         //       $gambarberita = $this->upload->data();
//         //       $thumbnail                = $config['file_name'];
//         //       // library yang disediakan codeigniter
//         //       $config['image_library']  = 'gd2';
//         //       // gambar yang akan dibuat thumbnail
//         //       $config['source_image']   = 'asset/img'.$gambarberita['file_name'].'';
//         //       // membuat thumbnail
//         //       $config['create_thumb']   = TRUE;
//         //       // rasio resolusi
//         //       $config['maintain_ratio'] = FALSE;
//         //       // lebar
//         //       $config['width']          = 250;
//         //       // tinggi
//         //       $config['height']         = 250;

//         //       $this->load->library('image_lib', $config);
//         //       $this->image_lib->resize();


//               $data = array(
//                 'judulberita'     => $this->input->post('judulberita'),
//                 'slug_berita'     => strtolower(url_title($this->input->post('judulberita'))),
//                 // 'deskripsi_produk'=> $this->input->post('deskripsi_produk', FALSE),
// 				        'id_kategoriberita'  =>  $this->input->post('id_kategoriberita'),
// 				        // 'gambarberita'           =>  $nmfile,
//                 'isiberita'     => $this->input->post('isiberita'),
//                 'id_user'        => $this->input->post('id_user'),
//                 'status'  => '0'

//               );

//               // eksekusi query INSEvRT
//               $this->Inputmodel->update($this->input->post('id_berita'),$data);
            
//               // set pesan data berhasil dibuat
//               $this->session->set_flashdata('message', '<div class="alert alert-success alert">Informasi Berhasil Diubah</div>');
//               redirect(base_url('informasi'));
            
//       }
        
//         //   else // Jika file upload kosong
//         //   {
//         //     $data = array(
// 		// 		'judulberita'     => $this->input->post('judulberita'),
//         //         'slug_berita'     => strtolower(url_title($this->input->post('judulberita'))),
//         //         // 'deskripsi_produk'=> $this->input->post('deskripsi_produk', FALSE),
//         //         'id_kategori'           =>  $this->input->post('id_kategori'),
//         //         'isiberita'     => $this->input->post('isiberita'),
//         //         'id_user'        => $this->session->userdata('id_user')
//         //     );

//         //     // eksekusi query INSERT
//         //    $this->Inputmodel->insert($data);
//         //     $this->session->set_flashdata('message', '<div class="alert alert-success alert">Data berhasil dibuat</div>');
//         //     redirect(base_url('input'));
          
          
        // }
						

						function update_aksi(){
							$id = $this->input->post('id_lpaoran');
							$nama_kegiatan = $this->input->post('nama_kegiatan');
							$jenis_kegiatan = $this->input->post('jenis_kegiatan');
							$tahap_kegiatan = $this->input->post('tahap_kegiatan');
							$biaya_bahan = $this->input->post('biaya_bahan');
							$biaya_operasional = $this->input->post('biaya_operasional');
							$biaya_takterduga = $this->input->post('biaya_takterduga');
							$keberhasilan = $this->input->post('keberhasilan');
						 
							$data = array(
								'nama_kegiatan' => $nama_kegiatan,
								'jenis_kegiatan' => $jenis_kegiatan,
								'tahap_kegiatan' => $tahap_kegiatan,
								'biaya_bahan' => $biaya_bahan,
								'biaya_operasional' => $biaya_operasional,
								'biaya_takterduga' => $biaya_takterduga,
								'total_biaya'=>$biaya_bahan+$biaya_operasional+$biaya_takterduga,
								'keberhasilan' => $keberhasilan

							);
						 
							$where = array(
								'id_lpaoran' => $id
							);
							$this->M_input->update_data($this->input->post('id_lpaoran'),$data);
							redirect('input');
						}
}

