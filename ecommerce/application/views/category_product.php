<div class="box">
    <h2 class="heading-title"><span>Welcome to Spicylicious</span></h2>
    <div class="box-content">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>
<div class="box">
    <div class="banner">
        <div><a href="#"><img src="image/banner1.jpg" alt="Spicylicious store" /></a></div>
        <div><a href="#"><img src="image/banner2.jpg" alt="Spicylicious store" /></a></div>
    </div>
</div>
<div class="box">
    <h2 class="heading-title"><span>Latest Products</span></h2>
    <div class="box-content">
        <div class="box-product fixed">
            <?php
            foreach($published_product_by_category as $v_product){
            ?>
            <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url();?>welcome/product_details/<?php echo $v_product->product_id;?>"> <span class="image"><img src="<?php echo base_url().$v_product->product_image;?>" alt="Spicylicious store" width="150" height="200" /></span> </a>
                <div class="pricetag_small">  <span class="new_price"><?php echo $v_product->product_price.'tk';?></span> </div>
                <div class="info">
                    <h3><?php echo $v_product->product_name;?></h3>
                    <p><?php echo $v_product->product_description;?></p>
                    <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
            </div>
           <?php
            }?>
        </div>
    </div>
</div>