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
			
			$start = 0;
			$limit = 10;
			$page_uri = $this->uri->segment(3);
			
			if(!empty($page_uri) || $page_uri > 0)
			{
				$start = ($limit*$page_uri)+1;
			}
			
			
			$data["list_penyakit"] = $this->penyakit_model->list_penyakit_limit($start,$limit);
			$count = $this->penyakit_model->count_penyakit();
			
			$this->load->library('pagination');
			
			$config['base_url']   = base_url('penyakit/page');
			$config['total_rows'] = $count;
			$config['per_page']    = $limit;
			$config["uri_segment"] = 3;
			$config["num_links"]   = 5;
			$config["use_page_numbers"]  = TRUE;
			//$config["page_query_string"] = TRUE;
			
			$config['first_tag_open']   = "<span class='btn btn-primary'>";
			$config['first_link'] 	   = "First";
			$config['first_tag_close']  = "</span>";
			
			$config['prev_link'] 		= "Prev";
			$config['prev_tag_open'] 	= "<span class='btn btn-primary'>";
			$config['prev_tag_close']   = "</span>";
			
			$config['cur_tag_open'] 	 = "<span class='active btn btn-default'>";
			$config['cur_tag_close'] 	= "</span>";
			
			$config['next_link'] 		= "Next";
			$config['next_tag_open'] 	= "<span class='active btn btn-primary'>";
			$config['next_tag_close']   = "</span>";
			
			$config['num_tag_open'] 	 = "<span class='active btn btn-primary'>";
			$config['num_tag_close'] 	= "</span>";
			
			$config['last_tag_open'] 	= "<span class='active btn btn-primary'>";
			$config['last_link'] 		= "Last";
			$config['last_tag_close']   = "</span>";
			
			$this->pagination->initialize($config);
			
			$data["create_link"] = $this->pagination->create_links();
			
			
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
		
		function test()
		{
			$jml = $this->penyakit_model->count_penyakit();
			echo $jml;
		}
		
		
	}