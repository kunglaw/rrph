<?php

	class Penyakit extends MX_Controller{
		
		function __construct()
		{
			parent::__construct();	
			
			$this->load->model("penyakit/penyakit_model");
			$this->load->model("penyakit/organ_model");
			$this->load->model("penyakit/perawatan_model");
			$this->load->model("product/product_model");
			$this->load->model("diagnosa/diagnosa_model");
		}
		
		function index()
		{
			
			$data["title"]   = "Penyakit";
			$data["heading"] = "Penyakit";
			$data["content"] = "penyakit/content";
			$data["template"] = "penyakit/template";
			
			$data["list_penyakit"] = $this->penyakit_model->list_penyakit();
			
			$this->load->view("index",$data);	
			
		}
		
		function organ()
		{	
			$data["title"]   = "Organ";
			$data["heading"] = "Organ";
			$data["content"] = "penyakit/content";
			$data["template"] = "penyakit/template";
			
		}
		
		function detail($id_penyakit)
		{
			$detail_penyakit   = $this->penyakit_model->detail_penyakit($id_penyakit);
			$organ 		     = $this->organ_model->detail_organ($detail_penyakit["id_organ"]);
			$penyakit_pd 	   = $this->penyakit_model->penyakit_pd($id_penyakit);
			$penyakit_pr       = $this->perawatan_model->detail_penyakit_perawatan($id_penyakit);
			$diagnosa_penyakit = $this->penyakit_model->diagnosa_penyakit($id_penyakit);
			
			$data["title"]   = $detail_penyakit["penyakit"];
			$data["heading"] = $detail_penyakit["penyakit"];
			$data["content"] = "penyakit/content_detail";
			$data["template"] = "penyakit/template";
			
			$data["diagnosa_penyakit"] = $diagnosa_penyakit;
			$data["penyakit_pd"] = $penyakit_pd;
			$data["organ"] = $organ;
			$data["penyakit"] = $detail_penyakit;
			$data["perawatan"] = $penyakit_pr;
			
			$this->load->view("index",$data);		
			
		}
		
		
	}