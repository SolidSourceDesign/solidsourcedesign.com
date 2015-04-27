<!doctype html>
<html>
  <head>
    <title>Solid Source Design Payments</title>
    <script type="text/javascript" src="jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>
    <script type="text/javascript" src="jquery.validate.creditcardtypes.js"></script>
    <script>
      $(document).ready(function(){
        $("#checkout_form").validate();
      });
    </script>    
    <link href="../images/favicon3.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="payments_styles.css">
  </head>
  <body>
  	<div class="back"><img class="back_img" src="../images/slate_back.png"/></div>
  	<div ><a href="http://www.solidsourcedesign.com/index.php" style="text-decoration:none;border:none;"><img  style="border:none;" class="logo" src="../images/Solid_Source_Design_Logo_no_back_gray_matte.png"/></a><a style="position:absolute;right:10px;top:10px;" href="http://www.solidsourcedesign.com/index.php">Return to homepage</a></div>
    <div class="content">
    <h1>Online Payments</h1>
    <h2>Checkout</h2>
    <?php
    require_once 'payment_processor_settings.php'; ?>    

        <form method="post" action="<?php echo (AUTHORIZENET_SANDBOX ? AuthorizeNetDPM::SANDBOX_URL : AuthorizeNetDPM::LIVE_URL)?>" id="checkout_form" name="checkout_form">
    <?php
        $time = time();
        $fp_sequence = $time;
        $fp = AuthorizeNetDPM::getFingerprint(AUTHORIZENET_API_LOGIN_ID, AUTHORIZENET_TRANSACTION_KEY, $amount, $fp_sequence, $time);
        $sim = new AuthorizeNetSIM_Form(
            array(
            'x_amount'        => $amount,
            'x_fp_sequence'   => $fp_sequence,
            'x_fp_hash'       => $fp,
            'x_fp_timestamp'  => $time,
            'x_relay_response'=> "TRUE",
            'x_relay_url'     => $payment_processor_relay_url,
            'x_login'         => AUTHORIZENET_API_LOGIN_ID,
            'x_test_request'  => TEST_REQUEST,
            )
        );
        echo $sim->getHiddenFieldString();
    
    ?>
      
        <div>
          <label>Credit Card Number</label>
          <input type="text" class="text required creditcard" size="16" name="x_card_num" value="" autofocus></input>
        </div>
        <div>
          <label>Exp. (mm/yy)</label>
          <input type="text" class="text required" size="4" name="x_exp_date" value=""></input>
        </div>
        <div>
          <label>CCV</label>
          <input type="text" class="text required" size="4" name="x_card_code" value=""></input>
        </div>
      <br/><br/>
        <div>
          <label>First Name</label>
          <input type="text" class="text required" size="15" name="x_first_name" value=""></input>
        </div>
        <div>
          <label>Last Name</label>
          <input type="text" class="text required" size="14" name="x_last_name" value=""></input>
        </div>
        <div>
          <label>Address</label>
          <input type="text" class="text required" size="26" name="x_address" value=""></input>
        </div>
        <div>
          <label>City</label>
          <input type="text" class="text required" size="15" name="x_city" value=""></input>
        </div>
        <div>
          <label>State</label>
          <input type="text" class="text required" size="4" name="x_state" value=""></input>
        </div>
        <div>
          <label>Zip Code</label>
          <input type="text" class="text required" size="9" name="x_zip" value=""></input>
        </div>
        <div>
          <label>Country</label>
          <input type="text" class="text required" size="22" name="x_country" value=""></input>
        </div>
      
      
      
    </form>
    	<div class="purchase_button">
    		<a href="" onclick="document.forms.checkout_form.submit(); return false;"><img src="purchase.png" border="0" alt="Submit" ></a>
    	</div>
    </div>
  		<?php include ("payments_footer.php"); ?>         
  </body>
</html>
