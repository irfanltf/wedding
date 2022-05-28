<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Comment_model');
	}
	public function index()
	{

		if ($_GET['to'] == '') {
			$penerima = '';
		}else{
			$penerima = $_GET['to'];
		}
		$data['penerima'] = $penerima;
		
		$this->load->view('welcome_message', $data);
	}

	public function data_comment(){
		echo json_encode($this->Comment_model->get());
	}

	public function post_data_comment(){
		$this->db->insert('comment', 
			[
				'nama' => $this->input->post('namaKomentar'),
				'message' => $this->input->post('isi_komentar_undangan'),
			
			]
		);
	}
}
