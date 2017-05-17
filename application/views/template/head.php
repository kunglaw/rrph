
<!-- META TAGS -->
<meta charset="UTF-8">

<!-- Title -->
<title><?=$title?> | <?=FULL_TITLE?></title>

<!-- Define a view port to mobile devices to use - telling the browser to assume that
the page is as wide as the device (width=device-width)
 and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

<!-- favicon -->
<link rel="shortcut icon" href="<?=ASSET_URL."images/favicon-new.png"?>">

<!-- Google Web Font -->
<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- bootstrap Style Sheet (caution ! - Do not edit this stylesheet) -->
<link rel="stylesheet" href="<?=ASSET_URL."css/bootstrap.css"?>" type="text/css" media="all">
<!-- Flexslider stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/flexslider.css"?>" type="text/css" media="all">
<!-- Animations stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/animations.css"?>" type="text/css" media="all">
<!-- Awesome Font stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/font-awesome.css"?>" type="text/css" media="all">
<!-- Datepciker stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/datepicker.css"?>" type="text/css" media="all">
<!-- Swipebox stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/swipebox.css"?>" type="text/css" media="all">
<!-- meanmenu stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/meanmenu.css"?>" type="text/css" media="all">
<!-- Include the site main stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/main.css"?>" type="text/css" media="all">
<!-- Include the site responsive  stylesheet -->
<link rel="stylesheet" href="<?=ASSET_URL."css/custom-responsive.css"?>" type="text/css" media="all">

<?php 
	if(!empty($css))
	{
		$this->load->view($css);
	}
?>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?=ASSET_URL."js/respond.min.js"?>"></script>
<![endif]-->
