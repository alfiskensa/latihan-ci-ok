<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('peserta_model');
		$this->load->helper('url_helper');
	}
	public function index(){

		$data['peserta'] = $this->peserta_model->tampil();
		$this->load->view('templates/header');
		$this->load->view('pages/index',$data);
		$this->load->view('templates/footer');
	}

	public function single($id = NULL){

			$data['datas'] = $this->peserta_model->tampil($id);
			if(empty($data['datas'])){
				show_404();
		}
			$this->load->view('templates/header');
			$this->load->view('pages/single',$data);
			$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('kontak', 'Kontak', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		if ($this->form_validation->run() === FALSE){
			
			$this->load->view('templates/header');
			$this->load->view('pages/tambah');
			$this->load->view('templates/footer');
		}
		else{
			$this->peserta_model->tambah_peserta();
			redirect('welcome');
		}
	}

	public function ubah($id){

		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jk','Jenis Kelamin','required');
		$this->form_validation->set_rules('kontak','Kontak','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		
		if($this->form_validation->run()=== FALSE){
			$data['datas'] = $this->peserta_model->tampil($id);
			$this->load->view('templates/header');
			$this->load->view('pages/ubah',$data);
			$this->load->view('templates/footer');
		}
		else{
			$this->peserta_model->ubah_peserta($id);
			redirect('welcome');
		}
	}

	public function hapus($id){
		$this->peserta_model->hapus_peserta($id);
		redirect('welcome');
	}
}
