<?php 
class Peserta_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function tampil($id = FALSE){

		if($id == FALSE){
			$query = $this->db->get('peserta');
			return $query->result_array();
		}

		$query = $this->db->get_where('peserta',array('id'=>$id));
		return $query->row_array();
	}

	public function tambah_peserta(){
		$this->load->helper('url');

		$data = array(
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'kontak' => $this->input->post('kontak'),
			'alamat' => $this->input->post('alamat')
		);
		return $this->db->insert('peserta',$data);
	}

	public function ubah_peserta($id){
		$this->load->helper('url');

		$data = array(
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'kontak' => $this->input->post('kontak'),
			'alamat' => $this->input->post('alamat')
		);
		$this->db->where('id',$id);
		return $this->db->update('peserta',$data);
	}

	public function hapus_peserta($id){
		return $this->db->delete('peserta', array('id'=>$id));
	}	
}