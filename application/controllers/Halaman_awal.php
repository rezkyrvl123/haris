<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_awal extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_Barang');
    }

	public function index()
	{
		$barang = $this->M_Barang->tampil()->result();
		$data['tampil'] = $barang;
		$this->load->view('Halaman_awal',$data);
	}

	function simpan(){
		$this->db->trans_start();
        $order_name = $this->input->post('order_name');
        $order_email = $this->input->post('order_email');
        $order_address = $this->input->post('order_address');
        $order_phone = $this->input->post('order_phone');
        
        $return = $this->M_Barang->simpan_pesanan($order_name,$order_email,$order_address,$order_phone);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->session->set_flashdata('gagal','Data Gagal Disimpan!');
		}else{
			// echo $this->session->set_flashdata('sukses','Data Berhasil Disimpan!');
		}
        redirect('Halaman_awal');
    }
}
