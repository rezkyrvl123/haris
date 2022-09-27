<?php

class M_Kategori extends CI_Model
{
	
	function tampil()
	{
		$result = $this->db->query("select * from tbl_category");
		return $result;
    }

    function simpan($nama_category)
	{
		$result = $this->db->query("insert into tbl_category values ('null','$nama_category')");
		return $result;
	}
    function tampil_kategori($id_category)
	{
		$result = $this->db->query("select * from tbl_category where id_category = '$id_category' LIMIT 1");
		return $result;
	}
	function hapus($id_category)
	{
		$result = $this->db->query("delete from tbl_category where id_category='$id_category'");
		return $result;
	}
	function ubah($id_category,$nama_category)
	{
		$result = $this->db->query("update tbl_category set nama_category='$nama_category' where id_category='$id_category'");
		return $result;
	}
	function simpan_pesanan($order_name,$order_email,$order_address,$order_phone)
	{
		$result = $this->db->query("insert into tbl_order values ('null','$order_name','$order_email','$order_address','$order_phone')");
		return $result;
	}
}											
