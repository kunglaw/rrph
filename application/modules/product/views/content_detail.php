<div class="shop-page clearfix">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="blog-page-single clearfix">

                    <div itemscope itemtype="http://schema.org/Product" class="post-338 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">


                        <span class="onsale">Sale!</span>
                        <div class="images">
                        	<?php
								$product_image = "https://d2ytqrx2swf6ug.cloudfront.net/assets/no-image-available-bbdbbe501d2b08a157a21431bc7b49df2c6cf6d892cc3083114229876cd7d6f4.jpg";
                                            
							  if(!empty($product["img"]))
							  {
								  $product_image = base_url("assets/rrph1/images/product/".$product["img"]);	
							  }
							?>
                            <a href="<?=$product_image?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                <img src="<?=$product_image?>" alt="Single Product"></a>
                            <div class="thumbnails columns-3">
                                <a href="<?=$product_image?>" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
                                    <img src="<?=$product_image?>" alt="Single Product"></a>
                            </div>
                        </div>

                        <div class="summary entry-summary entry-content">

                            <h1 itemprop="name" class="product_title entry-title"><?=$product["product"]?></h1>

                            <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <div class="star-rating" title="Rated 4 out of 5">
			<span style="width:80%">
				<strong itemprop="ratingValue" class="rating">4</strong> out of <span itemprop="bestRating">5</span>				based on <span itemprop="ratingCount" class="rating">4</span> customer ratings			</span>
                                </div>
                                <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count">4</span> customer reviews)</a>	</div>

                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                                <p class="price"> <ins><span class="amount">Rp. <?=number_format($product["harga_product"])?></span></ins></p>

                                <meta itemprop="price" content="12" />
                                <meta itemprop="priceCurrency" content="RP" />
                                <link itemprop="availability" href="http://schema.org/InStock" />

                            </div>
                            <div itemprop="description">
                                <p><?=$product["khasiat"]?></p>
                            </div>




                            <form class="cart" method="post" enctype='multipart/form-data'>

                                <div class="quantity">
                                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" />
                                </div>

                                <input type="hidden" name="add-to-cart" value="338" />

                                <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>

                            </form>


                            <div class="product_meta">



                                <span class="posted_in">Category: <a href="#" rel="tag">Posters</a></span>


                            </div>


                        </div><!-- .summary -->


                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs">
                                <li class="description_tab active">
                                    <a href="#tab-description">Description</a>
                                </li>
                                <li class="reviews_tab">
                                    <a href="#tab-reviews">Reviews (4)</a>
                                </li>
                            </ul>
                            <div class="panel entry-content wc-tab" id="tab-description">

                                <h2>Khasiat</h2>

                                <p> <?=$product["khasiat"]?></p>
                                
                                <h2>Sinergi </h2>
                                
                                <p><?=$product["sinergi"]?></p>
                                
                                <h2> KontraIndikasi </h2>
                                
                                <p><?=$product["kontraindikasi"]?></p>
                            </div>
                            
                            <div class="panel entry-content wc-tab" id="tab-reviews">
                                <div id="reviews">
                                    <div id="comments">
                                        <h2>4 reviews for Flying Ninja</h2>


                                        <ol class="commentlist">
                                            <li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-37">

                                                <div id="comment-37" class="comment_container">

                                                    <img class="avatar avatar-60 photo" src="<?=ASSET_URL."images/temp-images/author-img.png"?>" alt="Image">
                                                    <div class="comment-text">


                                                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
                                                            <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                        </div>




                                                        <p class="meta">
                                                            <strong itemprop="author">Cobus Bester</strong> &ndash; <time itemprop="datePublished" datetime="2013-06-07T11:52:25+00:00">June 7, 2013</time>:
                                                        </p>



                                                        <div itemprop="description" class="description"><p>Really happy with this print. The colors are great, and the paper quality is good too.</p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                            <li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-38">

                                                <div id="comment-38" class="comment_container">

                                                    <img class="avatar avatar-60 photo" src="<?=ASSET_URL."images/temp-images/author-img.png"?>" alt="Image">
                                                    <div class="comment-text">


                                                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 3 out of 5">
                                                            <span style="width:60%"><strong itemprop="ratingValue">3</strong> out of 5</span>
                                                        </div>




                                                        <p class="meta">
                                                            <strong itemprop="author">Andrew</strong> &ndash; <time itemprop="datePublished" datetime="2013-06-07T11:56:36+00:00">June 7, 2013</time>:
                                                        </p>



                                                        <div itemprop="description" class="description"><p>You only get the picture, not the person holding it, something they don&#8217;t mention in the description, now I&#8217;ve got to find my own person</p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                            <li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-39">

                                                <div id="comment-39" class="comment_container">

                                                    <img class="avatar avatar-60 photo" src="<?=ASSET_URL."images/temp-images/author-img.png"?>" alt="Image">
                                                    <div class="comment-text">


                                                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                                                            <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                                        </div>




                                                        <p class="meta">
                                                            <strong itemprop="author">Coen Jacobs</strong> &ndash; <time itemprop="datePublished" datetime="2013-06-07T12:19:25+00:00">June 7, 2013</time>:
                                                        </p>



                                                        <div itemprop="description" class="description"><p>This is my favorite poster. In fact, I&#8217;ve ordered 5 of them!</p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                            <li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-40">

                                                <div id="comment-40" class="comment_container">

                                                    <img class="avatar avatar-60 photo" src="<?=ASSET_URL."images/temp-images/author-img.png"?>" alt="Image">
                                                    <div class="comment-text">


                                                        <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
                                                            <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                        </div>




                                                        <p class="meta">
                                                            <strong itemprop="author">Stuart</strong> &ndash; <time itemprop="datePublished" datetime="2013-06-07T12:59:49+00:00">June 7, 2013</time>:
                                                        </p>



                                                        <div itemprop="description" class="description"><p>This is a fantastic quality print and is happily hanging framed on my wall now.</p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                        </ol>


                                    </div>


                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Add a review
                                                    <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
                                                <form action="#" method="post" id="commentform" class="comment-form">
                                                <p class="comment-form-rating"><label for="rating">Your Rating</label>
                                                    <p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>
                                                    <select name="rating" id="rating" style="display: none">
                                                    <option value="">Rate&hellip;</option>
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Not that bad</option>
                                                    <option value="1">Very Poor</option>
                                                </select></p><p class="comment-form-comment"><label for="comment">Your Review</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" /></p>
                                                <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required="true" /></p>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='338' id='comment_post_ID' />
                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                </p>				</form>
                                            </div><!-- #respond -->
                                        </div>
                                    </div>


                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>


                        <div class="related products">

                            <h2>Related Products</h2>

                            <ul class="products">


                                <li class="first post-73 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">

                                    <a href="#">
                                        <span class="onsale">Sale!</span>
                                        <img src="<?=ASSET_URL."images/temp-images/product-img.png"?>" alt="Product Image">
                                        <h3>Premium Quality</h3>
                                        <div class="star-rating" title="Rated 2 out of 5"><span style="width:40%"><strong class="rating">2</strong> out of 5</span></div>
                                        <span class="price"><del><span class="amount">&#36;15.00</span></del> <ins><span class="amount">&#36;12.00</span></ins></span>
                                    </a><a rel="nofollow" href="http://inspirythemes.biz/product/flying-ninja/?add-to-cart=73" data-quantity="1" data-product_id="73" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </li>


                                <li class="post-339 product type-product status-publish has-post-thumbnail product_cat-posters shipping-taxable purchasable product-type-simple product-cat-posters instock">

                                    <a href="#"> <img src="<?=ASSET_URL."images/temp-images/product-img1.png"?>" alt="Product Image">
                                        <h3>Woo Ninja</h3>
                                        <div class="star-rating" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>
                                        <span class="price"><span class="amount">&#36;15.00</span></span>
                                    </a><a rel="nofollow" href="#" data-quantity="1" data-product_id="339" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </li>


                                <li class="post-344 product type-product status-publish has-post-thumbnail product_cat-posters shipping-taxable purchasable product-type-simple product-cat-posters instock">

                                    <a href="#"> <img src="<?=ASSET_URL."images/temp-images/product-img2.png"?>" alt="Product Image">
                                        <h3>Woo Logo</h3>

                                        <span class="price"><span class="amount">&#36;15.00</span></span>
                                    </a><a rel="nofollow" href="#" data-quantity="1" data-product_id="344" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </li>


                                <li class="last post-337 product type-product status-publish has-post-thumbnail product_cat-posters shipping-taxable purchasable product-type-simple product-cat-posters instock">

                                    <a href="#"> <img src="<?=ASSET_URL."images/temp-images/product-img3.png"?>" alt="Product Image">
                                        <h3>Ship Your Idea</h3>

                                        <span class="price"><span class="amount">&#36;15.00</span></span>
                                    </a><a rel="nofollow" href="#" data-quantity="1" data-product_id="337" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </li>


                            </ul>

                        </div>


                        <meta itemprop="url" content="#" />

                    </div><!-- #product-338 -->



                </div><!-- /.blog-page-single -->

            </div>

        </div><!-- /.row -->

    </div><!-- /.container -->

</div>