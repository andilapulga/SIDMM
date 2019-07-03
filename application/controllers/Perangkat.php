<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perangkat extends CI_Controller {
   
        function __construct(){
            parent::__construct();		
            $this->load->model('M_perangkat');
            $this->load->helper('url');
        }

	/**
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
	public function read($id)
	{
        // var_dump($this->M_desa->get_laporan($id));

        $this->data['laporan']=$this->M_perangkat->get_laporan($id);
        $this->load->view('laporan/perangkat',$this->data);

       

	}
	public function detail($id_laporan){
		$this->data['laporan']=$this->M_perangkat->get_detail($id_laporan);
		$this->load->view('detail',$this->data);

	}
	
	
	
}
