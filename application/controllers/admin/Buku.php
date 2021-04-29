<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model(['Buku_m']);
        $this->load->library('form_validation');
    }

	public function index(){
		$data['buku_data'] = $this->Buku_m->getAll()->result(); 
		// var_dump($data);
		$this->load->view('admin/buku/buku_data', $data);
	}

	public function viewAddBuku(){
		$this->load->view('admin/buku/buku_add');
	}

	
}
