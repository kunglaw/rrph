<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->

<head>
   <?php $this->load->view("template/head");?>
</head>
<body class="<?=!empty($body_class) ? $body_class : "" ?>">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php 
	$this->load->view("template/header");
	$this->load->view($template);
	$this->load->view("template/footer");
?>

<a href="#top" id="scroll-top"></a>

<?php
	$this->load->view("template/js_under");
?>
</html>
