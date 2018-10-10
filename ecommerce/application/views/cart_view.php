<div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="account.html">Account</a> » Shopping Cart</div>
      <h2 class="heading-title"><span>Shopping Cart (4.90 kg)</span></h2>
      <div id="content">
        <div class="cart-info">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
               
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Total</td>
              </tr>
            </thead>
            <tbody>
                <?php
                $contents=$this->cart->contents();
//                echo '<pre>';
//                print_r($contents);
//                exit();
                foreach($contents as $v_contents)
                {
                ?>
              <tr>
                <td class="remove">
                    <a href="<?php echo base_url();?>cart/delete_from_cart/<?php echo $v_contents['rowid']?>">Remove</a>
                </td>
                <td class="image"><a href="product.html"><img src="<?php echo base_url().$v_contents['image'];?>" width="50" height="50"  alt="Spicylicious store" /></a></td>
                <td class="name"><a href="product.html"><?php echo $v_contents['name'];?></a> <span class="stock">***</span>
                  <div> </div></td>
                
                <td class="quantity">
                    <form action="<?php echo base_url();?>cart/update_cart/<?php echo $v_contents['rowid'];?>" method="post">
                    <input type="text" size="3" value="<?php echo $v_contents['qty'];?>" name="qty"/>
                    <input type="submit" value="Update">
                    </form>
                </td>
                <td class="price">BDT <?php echo $v_contents['price'];?></td>
                <td class="total">BDT <?php echo $v_contents['subtotal'];?></td>
              </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="cart-module">
         
        <div class="cart-total">
          <table>
            <tbody>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>Sub-Total:</b></td>
                <td class="right numbers">BDT <?php echo $this->cart->total();?></td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>VAT 15%:</b></td>
                <td class="right numbers">
                    <?php
                        $total=$this->cart->total();
                        $vat=(15*$total)/100;
                        echo 'BDT  '.$vat;
                    ?>
                    
                </td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right numbers_total"><b>Grand Total:</b></td>
                <td class="right numbers_total"><?php 
                $g_total=$this->cart->total() + $vat;
                $sdata=array();
                $sdata['g_total']=$g_total;
                $this->session->set_userdata($sdata);
                echo 'BDT  &nbsp; '.$g_total?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
          <div class="left"><a class="button" onclick="#"><span>Update</span></a></div>
          <?php
            $customer_id=$this->session->userdata('customer_id');
             $shipping_id=$this->session->userdata('shipping_id');
            if($customer_id !=NULL && $shipping_id == NULL)
            {
          ?>
          <div class="right"><a class="button" href="<?php echo base_url();?>checkout/shipping_form"><span>Checkout</span></a></div>
            <?php }
            else if($customer_id !=NULL && $shipping_id !=NULL)
            {
            ?>
          <div class="right"><a class="button" href="<?php echo base_url();?>checkout/payment_form"><span>Checkout</span></a></div>
            <?php }
            else { ?>
          <div class="right"><a class="button" href="<?php echo base_url();?>checkout/"><span>Checkout</span></a></div>
            <?php } ?>
          
          <div class="center"><a class="button" href="#"><span>Continue Shopping</span></a></div>
        </div>
      </div>
    </div>
  </div>