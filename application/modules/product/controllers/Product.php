<?php

	class Product extends MX_Controller{
		
		function __construct()
		{
			parent::__construct();	
			
			$this->load->model("product/product_model");
		}
		
		function index()
		{
			
			$data["title"]   = "Product";
			$data["heading"] = "Product";
			$data["content"] = "product/content";
			$data["template"] = "product/template";
			$data["banner"] = "product/banner";
			
			$data["list_product"] = $this->product_model->list_product();
			
			$data["body_class"] = "single single-product woocommerce woocommerce-page";
			$data["css"] = "product/css";
			
			$this->load->view("index",$data);	
			
		}
		
		function detail($id_product)
		{
			$detail_product = $this->product_model->detail_product($id_product);
			
			$data["title"]   = $detail_product["product"];
			$data["heading"] = $detail_product["product"];
			$data["content"] = "product/content_detail";
			$data["template"] = "product/template";
			$data["banner"] = "product/banner";
			
			$data["product"] = $detail_product;
			$data["body_class"] = "single single-product woocommerce woocommerce-page";
			$data["css"] = "product/css";
			
			$this->load->view("index",$data);		
			
		}
		
		
	}