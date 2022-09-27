<?php

class M_Barang extends CI_Model
{
	
	function tampil()
	{
		$result = $this->db->query("select * from tbl_product");
		return $result;
    }

    function simpan($product_name,$product_category,$product_deskripsi,$product_price,$product_picture)
	{
		$result = $this->db->query("insert into tbl_product values ('null','$product_name','$product_category','$product_deskripsi','$product_price','$product_picture')");
		return $result;
	}
    function tampil_barang($product_id)
	{
		$result = $this->db->query("select * from tbl_product where product_id = '$product_id' LIMIT 1");
		return $result;
	}
	function hapus($product_id)
	{
		$result = $this->db->query("delete from tbl_product where product_id='$product_id'");
		return $result;
	}
	function ubah($product_id,$product_name,$product_category,$product_deskripsi,$product_price,$product_picture)
	{
		$result = $this->db->query("update tbl_product set product_name='$product_name',product_category='$product_category',product_deskripsi='$product_deskripsi'
			,product_price='$product_price',product_picture='$product_picture' where product_id='$product_id'");
		return $result;
	}
	function simpan_pesanan($order_name,$order_email,$order_address,$order_phone)
	{
		$result = $this->db->query("insert into tbl_order values ('null','$order_name','$order_email','$order_address','$order_phone')");
		return $result;
	}
}											
