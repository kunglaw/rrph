<?php
	
	class Product_model extends CI_Model
	{
		function list_product()
		{
			$str = "SELECT * FROM product_ms ";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;
			
		}
		
		function list_product_limit($start,$limit)
		{
			$str = "SELECT * FROM product_ms LIMIT $start,$limit";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;	
			
		}
		
		function detail_product($id_product)
		{
			$str = "SELECT * FROM product_ms WHERE id_product = '$id_product' ";
			$q = $this->db->query($str);
			$f = $q->row_array(); 
			
			return $f;	
			
		}
		
		
		
	}