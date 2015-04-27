<?php require_once 'payment_processor_settings.php';
	$message = "Please go back and enter an amount.";
	if ($amount==null || empty($amount)) {
	echo "<script type='text/javascript'>alert('$message');</script>";
	}
	?>
<!doctype html>
<html>
  <head>
    <title>Solid Source Design Payments</title>
    <link href="../images/favicon3.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="payments_styles.css">
  </head>
  <body>
    <div class="back"><img class="back_img" src="../images/slate_back.png"/></div>
  	<div ><a href="http://www.solidsourcedesign.com/index.php" style="text-decoration:none;border:none;"><img  style="border:none;" class="logo" src="../images/Solid_Source_Design_Logo_no_back_gray_matte.png"/></a><a style="position:absolute;right:10px;top:10px;" href="http://www.solidsourcedesign.com/index.php">Return to homepage</a></div>
    <div class="content">
    <h1>Online Payments</h1>
    
      <p>Total</p>
      <p>$<?php echo $amount?></p>        
    <form method="post" action="checkout_form.php">
      <input type="hidden" name="amount" value="<?php echo $amount?>">
      <button type="button" onclick="history.back(-1)">Go back</button>
      <input type="submit" value="Continue" class="submit buy" autofocus>
    </form>
    	
    </div>
  		<?php include ("footer_shortpage.php"); ?>         
  </body>
</html>
