<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class opsidesa extends CI_Controller {


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
	function __construct(){
		parent::__construct();		
		$this->load->model('M_inputper');
		$this->load->helper('url');
		if(!$this->session->userdata("status"))
		redirect("welcome");
	}


	public function index()
	{
		$this->data['nama_desa']= $this->M_inputper->ambildesa();
		$this->load->view('opsidesa',$this->data);
		
	}
function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $where = array(
        'username' => $username,
        'password' => $password,
        'level'=>'1'
        );
    $cek = $this->M_login->cek_login($where);
   
    if($cek > 0){

        $data_session = array(
            'nama' => $username,
            'status' => "login"
            );

        $this->session->set_userdata($data_session);

		redirect(base_url().'dashboard', $data_session);
	

    }else{
        echo "Username dan password salah !";
    }
}

}
