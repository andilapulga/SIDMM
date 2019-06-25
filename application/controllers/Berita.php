<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Berita extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('M_berita');
  }
  
  public function index(){
    $data=array ('title' =>'tes',
                'berita' => $this->M_berita->daftar_berita(),
                'isi'    =>'berita'
  );
  $this->load->view('layout/wrapper',$data);
  }}