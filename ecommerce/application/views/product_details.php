<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product page :: Spicylicious - Premium HTML template by D.Koev</title>
<link rel="stylesheet" href="<?php echo base_url();?>stylesheet/stylesheet.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>stylesheet/cloud-zoom.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="<?php echo base_url();?>stylesheet/carousel.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheet/jquery-ui-1.8.9.custom.css" />
<!-- jQuery and Custom scripts -->
<script src="<?php echo base_url();?>js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/custom_scripts.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/cloud-zoom.1.0.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tabs.js"></script>
<!-- Tipsy -->
<script src="<?php echo base_url();?>js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>js/jquery.tweet.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>js/jquery.tweet.css" rel="stylesheet" type="text/css" />
</head>
<div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="category.html">Pizza</a> » Pizza Delicioso </div>
      <h2 class="heading-title"><span><?php echo $product_info->product_name;?></span></h2>
      
      <!-- PRODUCT INFO -->
      <div class="product-info fixed">
        <div class="left">
          <div class="image"> <a href="<?php echo base_url();?><?php echo $product_info->product_image?>"  class="cloud-zoom" id="zoom1" rel="adjustX: 5, adjustY:0, zoomWidth:550, zoomHeight:400, showTitle: false"> <img src="<?php echo base_url();?><?php echo $product_info->product_image?>" width="400" height="300" alt='' title="Pizza Delicioso" /></a> <span class="pricetag">$ 1400,99</span> </div>
          <div class="image-additional">
            <div class="image_car_holder">
              <ul class="jcarousel-skin-opencart">
                <li><a href='<?php echo base_url();?>image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage.jpg' "> <img src="<?php echo base_url();?>image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                <li><a href='<?php echo base_url();?>image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage1.jpg'"> <img src="<?php echo base_url();?>image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='<?php echo base_url();?>image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage2.jpg' "> <img src="<?php echo base_url();?>image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                <li><a href='<?php echo base_url();?>image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage.jpg' "> <img src="<?php echo base_url();?>image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                <li><a href='<?php echo base_url();?>image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage1.jpg'"> <img src="<?php echo base_url();?>image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='<?php echo base_url();?>image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage2.jpg' "> <img src="<?php echo base_url();?>image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                <li><a href='<?php echo base_url();?>image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage1.jpg'"> <img src="<?php echo base_url();?>image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='<?php echo base_url();?>image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url();?>image/smallimage2.jpg' "> <img src="<?php echo base_url();?>image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
              </ul>
            </div>
            <script type="text/javascript"><!--
      $('.image-additional ul').jcarousel({
	  vertical: false,
	  visible: 4,
	  scroll: 1
      });
      //--></script> 
          </div>
        </div>
        <div class="right">
          <div class="description"> <span>Brand:</span> <a href="#"><?php echo $product_info->manufacturer_name?></a><br/>
            <span>Category:</span><?php echo $product_info->category_name?><br/>
            <span>Product Price:</span>BDT <?php echo $product_info->product_price?><br/>
            
            
            <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
      //<![CDATA[
            document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
      //]]>
     </script> 
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/<?php echo base_url();?><?php echo base_url();?>js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
          <!-- AddThis Button END -->
            
            <div class="reviews"> <img alt="3 reviews" src="<?php echo base_url();?>image/stars-5.png"/>
              <p>Based on <a href="#" title="Read reviews">3 reviews</a></p>
            </div>
          </div>
         <!-- <div class="options">
            <div class="option" id="option-217"><b><span class="required">*</span> Select Size:</b>
              <select name="option[217]">
                <option value=""> --- Please Select --- </option>
                <option value="4">Small (+$4.70) </option>
                <option value="3">Middle (+$3.53) </option>
                <option value="1">Large (+$1.18) </option>
              </select>
            </div>
            <div class="option" id="option-223"><b>Add Ingredients:</b>
              <input type="checkbox" id="option-value-9" value="9" name="option[223][]"/>
              <label for="option-value-9"> Checkbox 2 (+$23.50) </label>
              <br/>
              <input type="checkbox" id="option-value-10" value="10" name="option[223][]"/>
              <label for="option-value-10"> Checkbox 3 (+$35.25) </label>
              <br/>
              <input type="checkbox" id="option-value-11" value="11" name="option[223][]"/>
              <label for="option-value-11"> Checkbox 4 (+$47.00) </label>
              <br/>
            </div>
          </div>-->
          <div class="cart"> <span class="label">Qty:</span>
              <form action="<?php echo base_url();?>cart/add_to_cart/<?php echo $product_info->product_id?>" method="post">
            <input type="text" value="1" size="2" name="qty" id="qty"/>
            <button type="submit" class="button" id="button-cart" title="Add to Cart">Add to Cart</button></a> <a href="#" class="wish_button" title="Add to Wish List">Add to Wish List</a> <a href="#" class="compare_button" title="Add to Compare">Add to Compare</a> </div>
            </form>
          <div class="tags"> <span class="label">Tags:</span> <a href="#">Pizza</a> <a href="#">Italian</a> <a href="#">Food</a> <a href="#">Delivery</a> <a href="#">Vegetarian</a> <a href="#">Sample tag</a> </div>
        </div>
        <div class="clear"></div>
      </div>
      <!-- END OF PRODUCT INFO -->
      
      <div id="content">
        <div class="box">
          <h2 class="heading-title"><span>Description</span></h2>
          <div class="box-content">
            <p><?php echo $product_info->product_description?></p>
          </div>
        </div>
        <div class="box">
          <h2 class="heading-title"><span>Reviews (3)</span></h2>
          <div class="box-content box-rating"> <a class="comment_switch" href="#"> <span class="button_comments">View Comments</span> <span class="button_review">Write Review</span> </a>
            <div class="box-comments">
              <div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="<?php echo base_url();?>image/stars-5.png" alt="3 reviews"/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="<?php echo base_url();?>image/stars-1.png" alt="3 reviews"/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="<?php echo base_url();?>image/stars-4.png" alt="3 reviews"/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
            <div class="box-write">
              <h3 id="review-title">Write a review</h3>
              <span class="label">Your Name:</span>
              <input type="text" value="" name="name"/>
              <br/>
              <br/>
              <span class="label">Your Review:</span>
              <textarea style="width: 98%;" rows="10" cols="40" name="text"></textarea>
              <span style="font-size: 11px;"><span style="color: #FF0000;">Note:</span> HTML is not translated!</span><br/>
              <br/>
              <span class="label">Rating:</span> <span>Bad</span>&nbsp;
              <input type="radio" value="1" name="rating"/>
              &nbsp;
              <input type="radio" value="2" name="rating"/>
              &nbsp;
              <input type="radio" value="3" name="rating"/>
              &nbsp;
              <input type="radio" value="4" name="rating"/>
              &nbsp;
              <input type="radio" value="5" name="rating"/>
              &nbsp; <span>Good</span><br/>
              <br/>
              <span class="label">Enter the code in the box below:</span>
              <input type="text" value="" name="captcha"/>
              <br/>
              <img id="captcha" alt="" src="<?php echo base_url();?>image/captcha.jpg"/><br/>
              <br/>
              <div class="buttons">
                <div class="left"><a class="button" id="button-review"><span>Submit Review</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="cat_list">
          <h2 class="heading-title"><span>Related Products</span></h2>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="<?php echo base_url();?>image/prod_pic1.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="old_price">$ 19 999,99</span> <span class="new_price">$ 14 999,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="<?php echo base_url();?>image/prod_pic2.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="price">$ 147,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="<?php echo base_url();?>image/prod_pic3.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="price">$ 472,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="<?php echo base_url();?>image/prod_pic4.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="price">$ 219,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>