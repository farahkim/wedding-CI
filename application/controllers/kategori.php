<?php  

	class Kategori extends CI_Controller{

		public function __construct(){
			parent::__construct();

			if ($this->session->userdata('role_id') != '2'){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
			}
		}

		public function makeup(){

			$data['makeup'] = $this->model_kategori->data_makeup()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('makeup', $data);
			$this->load->view('templates/footer');

		}

		public function busana(){

			$data['busana'] = $this->model_kategori->data_busana()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('busana', $data);
			$this->load->view('templates/footer');

		}

		public function dekorasi(){

			$data['dekorasi'] = $this->model_kategori->data_dekorasi()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dekorasi', $data);
			$this->load->view('templates/footer');

		}

		public function tempat(){

			$data['tempat'] = $this->model_kategori->data_tempat()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('tempat', $data);
			$this->load->view('templates/footer');

		}

		public function souvenir(){

			$data['souvenir'] = $this->model_kategori->data_souvenir()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('souvenir', $data);
			$this->load->view('templates/footer');

		}
	}