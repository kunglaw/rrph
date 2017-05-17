<?php 

	class Diagnosa_model extends CI_model{
		
		function __construct()
		{
			
			
		}
		
		function list_diagnosa()
		{
			$str = "SELECT * FROM diagnosa_ms";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;
		}
		
		function detail_diagnosa($id_diagnosa)
		{
			$str = "SELECT * FROM diagnosa_ms WHERE id_diagnosa = '$id_diagnosa' ";
			$q = $this->db->query($str);
			$f = $q->row_array();
			
			return $f;
			
		}
		
		
		
	}