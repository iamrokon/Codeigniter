<!-- CONTENT -->
  <div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> Â» <a href="cart.html">Cart</a> Â» Checkout </div>
      <h2 class="heading-title"><span>Checkout</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->

          <h2><a href="#">Shipping Form</a></h2>
          <div>
              <form action="<?php echo base_url();?>checkout/confirm_order" method="post">
            <table class="form">
              <tbody>
                <tr>
                  <td width="275px"><span class="required">*</span> Payment Method</td>
                  <td>
                      <input type="radio" class="large-field" value="cash_on_delivery" name="payment_method" />Cash On delivery
                      <input type="radio" class="large-field" value="paypal" name="payment_method"/>Paypal
                  </td>
                  </tr>
                    <tr>
                        <td> </td>
                    <td>
                        <input type="submit" name="lbtn" id="rbtn" value="confirm order">
                    </td>
                </tr>
              
                 
              </tbody>
            </table>
            </form>
          </div>
                   </div>
        </div>
        <!-- END OF ACCORDION --> 
        
      </div>
    </div>
  </div>


