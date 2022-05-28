<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Controller {

	public function get()
	{
		return $this->db->query("
			SELECT id as id_komentar_undangan,
			date as tgl_komentar_undangan,
			message as isi_komentar_undangan,
			gambar,
			nama as nama_komentar_undangan,
			sub_id as sub_id_komentar
			FROM comment
			")->result();
	}
}
