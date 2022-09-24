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
}											
