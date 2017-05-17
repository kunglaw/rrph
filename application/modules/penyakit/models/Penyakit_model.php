<?php
	
	class Penyakit_model extends CI_Model
	{
		function list_penyakit()
		{
			$str = "SELECT * FROM penyakit_ms ";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;
			
		}
		
		function list_penyakit_limit($start,$limit)
		{
			$str = "SELECT * FROM penyakit_ms LIMIT $start,$limit";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;	
			
		}
		
		function detail_penyakit($id_penyakit)
		{
			$str = "SELECT * FROM penyakit_ms WHERE id_penyakit = '$id_penyakit' ";
			$q = $this->db->query($str);
			$f = $q->row_array(); 
			
			return $f;	
			
		}
		
		
		// detail_penyakit_product
		function penyakit_pd($id_penyakit)
		{
			$str = "SELECT * FROM detail_penyakit_product WHERE id_penyakit = '$id_penyakit' ";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;	
			
		}
		
		function organ_penyakit($id_organ)
		{
			$str = "SELECT * FROM organ WHERE id_organ = '$id_organ' ";
			$q = $this->db->query($str);
			$f = $q->row_array();
			
			return $f;
				
		}
		
		function diagnosa_penyakit($id_penyakit)
		{
			$str = "SELECT * FROM detail_penyakit_tr WHERE id_penyakit = '$id_penyakit' ";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;
			
			
		}
		
		function search_penyakit()
		{
				
			
		}
		
		
		
	}