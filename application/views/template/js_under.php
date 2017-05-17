<script type='text/javascript' id='quick-js'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery-2.2.3.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/bootstrap.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.flexslider-min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.swipebox.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.isotope.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.appear.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.ui.core.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.ui.datepicker.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.validate.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.form.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.autosize.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.meanmenu.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery.velocity.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery-twitterFetcher.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/respond.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/jquery-migrate-1.2.1.min.js"?>'></script>
<script type='text/javascript' src='<?=ASSET_URL."js/custom.js"?>'></script>

<?php
	if(!empty($js))
	{
		$this->load->view($js);
	}
?>
