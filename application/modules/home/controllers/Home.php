<?php
	
	class Home extends MX_Controller{
		
		function __construct()
		{
			parent::__construct();	
		}
		
		function index()
		{
			$data["title"] = "Home";
			
			$this->load->view("home/index",$data);
		}
			
	}