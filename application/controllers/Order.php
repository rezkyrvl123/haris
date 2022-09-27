<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
    function __construct(){
        parent::__construct();
        $this->load->model('M_Order');
    }

	public function index()
	{
		// var_dump('Aku');
		// die;
        $order = $this->M_Order->tampil()->result();
		$data['tampil'] = $order;
		$this->load->view('V_Order',$data);
		// $this->load->view('V_Order');
	}

    function tampil_order(){
        $order_id = $this->input->post('order_id');
        $order = $this->M_Order->tampil_order($order_id)->row();
        echo json_encode($order);
    }

    function hapus(){
		$this->db->trans_start();
        $order_id = $this->input->post('id');
        $return = $this->M_Order->hapus($order_id);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->set_flashdata('gagal','Data Gagal Dihapus!');
		}else{
        	echo $this->set_flashdata('sukses','Data Berhasil Dihapus!');
		}
        redirect('Order');
    }

    function ubah(){
		$this->db->trans_start();
        $order_id = $this->input->post('order_id');
        $order_name = $this->input->post('order_name');
        $order_email = $this->input->post('order_email');
        $order_address = $this->input->post('order_address');
        $order_phone = $this->input->post('order_phone');
		// $product_picture = $this->M_Barang->tampil_barang($product_id)->row()->product_picture;
		
        $return = $this->M_Order->ubah($order_id,$order_name,$order_email,$order_address,$order_phone);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->session->set_flashdata('gagal','Data Gagal Diubah!');
		}else{
			// echo $this->session->set_flashdata('sukses','Data Berhasil Diubah!');
		}
        redirect('Order');
    }
}
