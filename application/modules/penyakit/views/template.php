<?php 
	$this->load->view("template/banner");	
?>
<div class="blog-page default-page clearfix">
  <div class="container">
      <div class="row">
          <div class="col-lg-9 col-md-8">
              <div class="blog-page-single clearfix">
                  <article class="page hentry  clearfix">
                      <div class="page-contents">
                          <?php $this->load->view($content); ?>
                      </div>
                  </article>
              </div>
          </div>
      
          <?php $this->load->view("template/sidebar"); ?>
      
      </div><!-- End of .row -->
  </div><!-- End of .container -->
</div>
