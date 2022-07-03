<?php 

class Model_kategori extends CI_Model{

	public function data_makeup(){

		return $this->db->get_where('tb_wedding', array('kategori' => 'makeup'));
	}

	public function data_busana(){

		return $this->db->get_where('tb_wedding', array('kategori' => 'busana'));
	}

	public function data_dekorasi(){

		return $this->db->get_where('tb_wedding', array('kategori' => 'dekorasi'));
	}

	public function data_tempat(){

		return $this->db->get_where('tb_wedding', array('kategori' => 'tempat'));
	}

	public function data_souvenir(){

		return $this->db->get_where('tb_wedding', array('kategori' => 'souvenir'));
	}
}