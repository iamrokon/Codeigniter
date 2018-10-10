
<div id="accordion" class="checkout">



    <h2>Shipping Address</h2>
    <hr/>
<div id="accordion" class="checkout">

      <?php 
    $msg=$this->session->userdata('message');
    if($msg){?>
       
    <h4 style="color:green"><?php echo $msg;
    
    $this->session->unset_userdata('message');
    ?></h4>
            
            
            <?php }?>
   
          <div>
            <table class="form">
                <form action="<?php echo base_url();?>checkout/save_shipping" method="post" onsubmit="return validateStandard(this)">
              <tbody>
                <tr>
                  <td><span class="required">*</span>Name:</td>
                  <td><input type="text" class="large-field" value="" name="name" required regexp="JSVAL_RX_ALPHA" err="Enter valid first name"/></td>
                </tr>
             
                <tr>
                  <td><span class="required">*</span> Email Address:</td>
                  <td><input type="text" class="large-field" value="" name="email_address" required regexp="JSVAL_RX_EMAIL"/></td>
                </tr>
                
                <tr>
                  <td>Contact Number:</td>
                  <td><input type="text" class="large-field" value="" name="contact_number"/></td>
                </tr>
             
                <tr>
                  <td>Address</td>
                  <td><input type="text" class="large-field" value="" name="address"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> City:</td>
                  <td><input type="text" class="large-field" value="" name="city"/></td>
                </tr>
              <tr>
                  <td><span class="required">*</span> Country:</td>
                  <td><select class="large-field" name="country">
                      <option value=""> --- Please Select --- </option>
                      <script type="text/javascript">
                          printCountryOptions();
                      </script>
                    </select></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Zip Code:</td>
                  <td><input type="text" class="large-field" value="" name="zip_code"/></td>
                </tr>
                
                <tr >
                  <td></td>
                  <td><input type="submit" class="large-field" value="Shipping" name="btn"/></td>
                </tr>
              </tbody>
              </form>
            </table>
          
        </div>