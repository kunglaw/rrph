<?php

	class Perawatan_model extends CI_model{
		
		function list_perawatan()
		{
			$str = "SELECT * FROM perawatan_ms ";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;	
			
		}
		
		function detail_perawatan($id_perawatan)
		{
			$str = "SELECT * FROM perawatan_ms WHERE id_perawatan = '$id_perawatan' ";
			$q = $this->db->query($str);
			$f = $q->row_array();
			
			return $f;
		}
		
		function detail_penyakit_perawatan($id_penyakit)
		{
			$str = "SELECT * FROM detail_perawatan WHERE id_penyakit = '$id_penyakit' ";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;	
			
		}
			
		
	}