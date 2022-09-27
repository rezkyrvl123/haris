<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_Barang');
		$this->load->helper('url'); 
    }
	public function index()
	{
		// var_dump('Aku');
		// die;
		$barang = $this->M_Barang->tampil()->result();
		$data['tampil'] = $barang;
		$this->load->view('V_Barang',$data);
		// $this->load->view('V_Barang');
	}
	function tampil_barang(){
        $product_id = $this->input->post('product_id');
        $barang = $this->M_Barang->tampil_barang($product_id)->row();
        echo json_encode($barang);
    }
	function simpan(){
		$this->db->trans_start();
        $product_name = $this->input->post('product_name');
        $product_category = $this->input->post('product_category');
        $product_deskripsi = $this->input->post('product_deskripsi');
        $product_price = $this->input->post('product_price');
        

		//Upload
		if(!empty($_FILES['product_picture']['name'])){ 
			$_FILES['file']['name']     = $_FILES['product_picture']['name']; 
			$_FILES['file']['type']     = $_FILES['product_picture']['type']; 
			$_FILES['file']['tmp_name'] = $_FILES['product_picture']['tmp_name']; 
			$_FILES['file']['error']     = $_FILES['product_picture']['error']; 
			$_FILES['file']['size']     = $_FILES['product_picture']['size']; 
				
			$uploadPath					= './upload/barang/'; 
			$config['upload_path']		= $uploadPath; 
			$config['allowed_types']	= 'jpg|jpeg|png'; 
			$config['max_size']			= 2048;
			// $config['width']			= 260;
            // $config['height']		= 180;
			$config['file_name']		= time();

			$this->load->library('upload', $config); 
			$this->upload->initialize($config); 
				
			if($this->upload->do_upload('file')){ 
				$fileData = $this->upload->data(); 
				$product_picture = $fileData['file_name']; 
			}else{
				// var_dump ($this->upload->display_errors());
				// die;
				// echo $this->session->set_flashdata('gagal','Gambar Gagal di Upload!');
				redirect('Barang');
			}
		}else{ 
			// echo $this->session->set_flashdata('gagal','Gambar Gagal di Upload!');
			redirect('Barang');
		}
		//Upload

        $return = $this->M_Barang->simpan($product_name,$product_category,$product_deskripsi,$product_price,$product_picture);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->session->set_flashdata('gagal','Data Gagal Disimpan!');
		}else{
			// echo $this->session->set_flashdata('sukses','Data Berhasil Disimpan!');
		}
        redirect('Barang');
    }

	

	function hapus(){
		$this->db->trans_start();
        $product_id = $this->input->post('id');
        $return = $this->M_Barang->hapus($product_id);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->set_flashdata('gagal','Data Gagal Dihapus!');
		}else{
        	echo $this->set_flashdata('sukses','Data Berhasil Dihapus!');
		}
        redirect('Barang');
    }

	function ubah(){
		$this->db->trans_start();
        $product_id = $this->input->post('product_id');
        $product_name = $this->input->post('product_name');
        $product_category = $this->input->post('product_category');
        $product_deskripsi = $this->input->post('product_deskripsi');
        $product_price = $this->input->post('product_price');
		$product_picture = $this->M_Barang->tampil_barang($product_id)->row()->product_picture;
		
		//Upload
		for ($i=1; $i <=5 ; $i++){
			if(!empty($_FILES['product_picture']['name'])){ 
				$_FILES['file']['name']     = $_FILES['product_picture']['name']; 
				$_FILES['file']['type']     = $_FILES['product_picture']['type']; 
				$_FILES['file']['tmp_name'] = $_FILES['product_picture']['tmp_name']; 
				$_FILES['file']['error']     = $_FILES['product_picture']['error']; 
				$_FILES['file']['size']     = $_FILES['product_picture']['size']; 
					
				$uploadPath					= './upload/barang/'; 
				$config['upload_path']		= $uploadPath; 
				$config['allowed_types']	= 'jpg|jpeg|png'; 
				$config['max_size']			= 2048;
				$config['file_name']		= time();

				

					$this->load->library('upload', $config); 
					$this->upload->initialize($config); 
						
					if($this->upload->do_upload('file')){ 
						@unlink('upload/barang/'.$product_picture);
						$fileData = $this->upload->data(); 
						$product_picture = $fileData['file_name']; 
					}else{
						echo $this->session->set_flashdata('gagal','Gambar Gagal di Upload! ');
						redirect('Barang');
					}
				
			}
		}
		//Upload

        $return = $this->M_Barang->ubah($product_id,$product_name,$product_category,$product_deskripsi,$product_price,$product_picture);
		$this->db->trans_complete();
		if($return==0){
        	echo $this->session->set_flashdata('gagal','Data Gagal Diubah!');
		}else{
			// echo $this->session->set_flashdata('sukses','Data Berhasil Diubah!');
		}
        redirect('Barang');
    }
}
