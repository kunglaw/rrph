<style>
	
	li.type-product img{
		
		height:247px !important;	
		width:100% !important;
		margin:0 !important;
		
		
	}
	
	ul.products li{
		
		height:430px !important; 
		background-color:#FFF;
		margin-bottom:2em;
		padding:0;
		text-align:center;
		
	}

</style>
<div class="shop-page clearfix">
    <!--filter-->
    <div class="container">
      <div class="blog-page-single clearfix">
          <article  class="page hentry clearfix">
              <div class="full-width-contents">
                  <div class="entry-content">
                  </div>
              </div>
          </article>
      </div>
      <ul id="filters">
          <li class="active"><a href="#" data-filter="*">Semua</a></li>
          <li><a href="#" data-filter=".advanced-technology">Makan & Minuman</a></li>
          <li><a href="#" data-filter=".free-facilities">Kapsul</a></li>
          <li><a href="#" data-filter=".health-counseling">Minyak</a></li>
          <li><a href="#" data-filter=".kids-care">Lainnya</a></li>
      </ul>
    </div>

    <div class="container ">
         <div class="row">
                    
            <p class="woocommerce-result-count">
                  Showing 1–9 of 23 results</p>
                  
              <form class="woocommerce-ordering" method="get">
                  <select name="orderby" class="orderby">
                      <option value="menu_order" selected="selected">Default sorting</option>
                      <option value="popularity">Sort by popularity</option>
                      <option value="rating">Sort by average rating</option>
                      <option value="date">Sort by newness</option>
                      <option value="price">Sort by price: low to high</option>
                      <option value="price-desc">Sort by price: high to low</option>
                  </select>
              </form>
            
            <ul class="products">
              <?php foreach ($list_product as $row) { ?>
              <!--column start-->
              
              <li class="type-product col-md-3 col-sm-5 col-xs-10 col-sm-offset-1 col-md-offset-1 col-xs-offset-1">
  
                      <a href="<?=base_url("product/detail/".$row["id_product"])?>">
                          
                          <?php
                                  $product_image = "https://d2ytqrx2swf6ug.cloudfront.net/assets/no-image-available-bbdbbe501d2b08a157a21431bc7b49df2c6cf6d892cc3083114229876cd7d6f4.jpg";
                                  
                              
                                  
                                  if(!empty($row["img"]))
                                  {
                                      $product_image = base_url("assets/rrph1/images/product/".$row["img"]);	
                                  }
                              ?>
                              
                          <img src="<?=$product_image?>" alt="Product Image">
                          <h3><?= $row["product"] ?></h3>
                         
                          
                          <div class="price"> <ins><span class="amount">Rp. <?=number_format($row["harga_product"])?></span></ins></div>
                      </a>
                      <hr>
                      <div><a rel="nofollow" href="http://inspirythemes.biz/shop/?add-to-cart=338" data-quantity="1" data-product_id="338" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a></div>
                  </li>
              <!--column end-->
              <?php } ?>
            </ul>
                      
            
         
         </div> <!-- end row -->
    </div>
</div>