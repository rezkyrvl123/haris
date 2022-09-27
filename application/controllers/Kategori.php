<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_Kategori');
		$this->load->helper('url'); 
    }
	public function index()
	{
		// var_dump('Aku');
		// die;
		$kategori = $this->M_Kategori->tampil()->result();
		$data['tampil'] = $kategori;
		$this->load->view('V_Kategori',$data);
		// $this->load->view('V_Barang');
	}
	function tampil_kategori(){
        $id_category = $this->input->post('id_category');
        $kategori = $this->M_Kategori->tampil_kategori($id_category)->row();
        echo json_encode($kategori);
    }
	function simpan(){
		$this->db->trans_start();
        $nama_category = $this->input->post('nama_category');
        $return = $this->M_Kategori->simpan($nama_category);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->session->set_flashdata('gagal','Data Gagal Disimpan!');
		}else{
			// echo $this->session->set_flashdata('sukses','Data Berhasil Disimpan!');
		}
        redirect('Kategori');
    }

	

	function hapus(){
		$this->db->trans_start();
        $id_category = $this->input->post('id');
        $return = $this->M_Kategori->hapus($id_category);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->set_flashdata('gagal','Data Gagal Dihapus!');
		}else{
        	echo $this->set_flashdata('sukses','Data Berhasil Dihapus!');
		}
        redirect('Kategori');
    }

	function ubah(){
		$this->db->trans_start();
        $id_category = $this->input->post('id_category');
        $nama_category = $this->input->post('nama_category');

        $return = $this->M_Kategori->ubah($id_category,$nama_category);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->session->set_flashdata('gagal','Data Gagal Diubah!');
		}else{
			// echo $this->session->set_flashdata('sukses','Data Berhasil Diubah!');
		}
        redirect('Kategori');
    }
}
