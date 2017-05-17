<?php

	class Organ_model extends CI_Model{
		
		function list_organ()
		{
			$str = "SELECT * FROM organ ";
			$q = $this->db->query($str);
			$f = $q->result_array();
			
			return $f;
			
		}
		
		function detail_organ($id_organ)
		{
			$str = "SELECT * FROM organ WHERE id_organ = '$id_organ' ";	
			$q = $this->db->query($str);
			$f = $q->row_array();
			
			return $f;
		}
		
	}