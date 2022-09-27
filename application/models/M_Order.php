<?php

class M_Order extends CI_Model
{   
	function tampil()
	{
		$result = $this->db->query("select * from tbl_order");
		return $result;
    }

    function tampil_order($order_id)
	{
		$result = $this->db->query("select * from tbl_order where order_id = '$order_id' LIMIT 1");
		return $result;
	}
    function hapus($order_id)
	{
		$result = $this->db->query("delete from tbl_order where order_id='$order_id'");
		return $result;
	}
    function ubah($order_id,$order_name,$order_email,$order_address,$order_phone)
	{
		$result = $this->db->query("update tbl_order set order_name='$order_name',order_email='$order_email',order_address='$order_address'
			,order_phone='$order_phone' where order_id='$order_id'");
		return $result;
	}

}											
