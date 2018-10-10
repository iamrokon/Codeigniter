
<div id="accordion" class="checkout">
          <h2>Login</h2>
          <div>
               <h3 style="color: red" >
              <?php
                $msg=$this->session->userdata('message');
                if($msg)
                {
                    echo $msg;
                    $this->session->unset_userdata('message');
                }
                
              
              ?>
          </h3>
            <table class="form">
              <form action="<?php echo base_url();?>checkout/login_customer" method="post">
                <tbody>
                
                <tr>
                  <td>Email Address:</td>
                  <td><input type="text" class="large-field" value="" name="email_address"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input type="password" class="large-field" value="" name="password"/></td>
                </tr>
               
                <tr >
                   <td></td>
                    <td ><input type="submit" class="large-field" value="Login" name="btn"/></td>
                </tr>
              </tbody>
              </form>
            </table>
          
        </div>

    <h2>Registration</h2>

<div id="accordion" class="checkout">
          
          <div>
            <table class="form">
                <form action="<?php echo base_url();?>checkout/save_customer" method="post" onsubmit="return validateStandard(this)">
              <tbody>
                <tr>
                  <td><span class="required">*</span> First Name:</td>
                  <td><input type="text" class="large-field" value="" name="first_name" required regexp="JSVAL_RX_ALPHA" err="Enter valid first name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Last Name:</td>
                  <td><input type="text" class="large-field" value="" name="last_name" required regexp="JSVAL_RX_ALPHA"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Email Address:</td>
                  <td><input type="text" class="large-field" value="" name="email_address" required regexp="JSVAL_RX_EMAIL"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span>Confirm Email Address:</td>
                  <td><input type="text" class="large-field" value="" equals="email_address" required err="Confirm email address mustbe same as email address"/></td>
                </tr>
               
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input type="password" class="large-field" value="" name="password"/></td>
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
                  <td><input type="text" class="large-field" value="" name="Zip_code"/></td>
                </tr>
                
                <tr >
                  <td></td>
                  <td><input type="submit" class="large-field" value="Sign Up" name="btn"/></td>
                </tr>
              </tbody>
              </form>
            </table>
          
        </div>