<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plogin extends CI_Controller{

function __construct(){
    parent::__construct();		
    $this->load->model('M_plogin');


}
// kjgaghakgh

function index(){
    $this->load->view('plogin');
}

function aksi_login(){
    $username = $this->input->post('username_pen');
    $password = $this->input->post('password');

    $where = array(
        'username' => $username,
        'password' => $password,
        'level'=>'2'
        );
    $cek = $this->M_plogin->cek_login($where);
   
    if($cek > 0){

        $data_session = array(
            'nama' => $username,
            'status' => "plogin"
            );

        $this->session->set_userdata($data_session);

		redirect(base_url().'dashboardpen', $data_session);
	

    }else{
        echo "Username dan password salah !";
    }
}

function logout(){
    $this->session->sess_destroy();
    redirect(base_url('Plogin'));
 }
}