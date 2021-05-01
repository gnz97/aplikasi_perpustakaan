<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model(['Pengembalian_m']);
        $this->load->library('form_validation');
    }

	public function index(){
		$data['pengembalian_data'] = $this->Pengembalian_m->getAll()->result(); 
		// var_dump($data);
		$this->load->view('admin/pengembalian/pengembalian_data', $data);
	}

	public function viewAddpengembalian(){
		$this->load->view('admin/pengembalian/pengembalian_add');
	}

	public function addpengembalian(){
		// $response = array();
			// $this->form_validation->set_rules('gejalaCode', 'Gejala Code', 'required|is_unique[tb_gejala.gejalaCode]');
			// $this->form_validation->set_rules('gejalaNama', 'Gejala Nama', 'required');
			// $this->form_validation->set_message('required', '%s masih Kososng, atau belum di pilih Silahkan Di isi');
			// $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');
			// if($this->form_validation->run() == FALSE){
			// 	$response = array(
			// 		'status' 	    => 'error',
			// 		'gejalaCode' 		=> form_error('gejalaCode'),
			// 		'gejalaNama' 		=> form_error('gejalaNama'),
			// 	);
			// }
			// else{
				$post = $this->input->post(null, TRUE);
				$this->Pengembalian_m->addpengembalian($post);
				if($this->db->affected_rows() > 0){
					$response = array(
						'status' 	=> 'success',
					);
				}
				
			// }
			echo json_encode($response);
		
	}

	public function viewEditpengembalian($id){
		$data['pengembalian_data'] = $this->Pengembalian_m->getByID($id)->row(); 
		$this->load->view('admin/pengembalian/pengembalian_edit', $data);
	}

	public function updatepengembalian(){
		// $response = array();
        // $this->form_validation->set_rules('gejalaCode', 'Gejala Code', 'required|callback_gejalaCode_check');
        // $this->form_validation->set_rules('gejalaNama', 'Gejala Nama', 'required');
        // $this->form_validation->set_message('required', '%s masih Kososng, atau belum di pilih Silahkan Di isi');
        // $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');
        // if($this->form_validation->run() == FALSE){
		// 	$response = array(
        //         'status' 	    => 'error',
        //         'gejalaCode' 		=> form_error('gejalaCode'),
        //         'gejalaNama' 		=> form_error('gejalaNama'),
        //     );
        // }
        // else{
            $post = $this->input->post(null, TRUE);
            $this->Pengembalian_m->updatepengembalian($post);
            if($this->db->affected_rows() > 0){
                $response = array(
                    'status' 	=> 'success',
                );
            }
            
        // }
        
        echo json_encode($response);
	}


	public function deletpengembalian(){
        $id = $this->input->post('id');
        $this->Pengembalian_m->delpengembalian($id);

        if($this->db->affected_rows() > 0){
            $response = array(
                'status' 	=> 'success',
            );
        }
        echo json_encode($response);
    }

	
}
