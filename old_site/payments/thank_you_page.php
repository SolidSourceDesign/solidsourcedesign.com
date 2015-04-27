<?php require_once 'payment_processor_settings.php';?>
<?php date_default_timezone_set('America/Denver');
    $date = date('Y-m-d H:i');
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
    <h2>Thank you for choosing Solid Source!</h2>
    <h3>Approved</h3>
    	<div>Transaction ID: <?php echo htmlentities($_GET['transaction_id'])?></div>
    	<div>Date/time: <?php echo $date; ?></div>
    	<div>Amount: $<?php echo htmlentities($_GET['amount'])?> USD</div>
    	<div>Card: <?php echo htmlentities($_GET['acct_number'])?></div>
    	<div>Name: <?php echo htmlentities($_GET['first_name'])?> <?php echo htmlentities($_GET['last_name'])?></div>
    	<div>Address: <?php echo htmlentities($_GET['address'])?></div>
    	<div><?php echo htmlentities($_GET['city'])?>, <?php echo htmlentities($_GET['state'])?> <?php echo htmlentities($_GET['zip_code'])?>   <?php echo htmlentities($_GET['country'])?></div>
     <form action="printer.php" name="printer_form" method="get" target="_blank">   
        <input type="hidden" name="transaction_id" value="<?php echo htmlentities($_GET['transaction_id'])?>"/>
        <input type="hidden" name="date" value="<?php echo $date; ?>"/>
        <input type="hidden" name="amount" value="<?php echo htmlentities($_GET['amount'])?>"/>
        <input type="hidden" name="acct_number" value="<?php echo htmlentities($_GET['acct_number'])?>"/>
        <input type="hidden" name="first_name" value="<?php echo htmlentities($_GET['first_name'])?>"/>
        <input type="hidden" name="last_name" value="<?php echo htmlentities($_GET['last_name'])?>"/>
        <input type="hidden" name="address" value="<?php echo htmlentities($_GET['address'])?>"/>
        <input type="hidden" name="city" value="<?php echo htmlentities($_GET['city'])?>"/>
        <input type="hidden" name="state" value="<?php echo htmlentities($_GET['state'])?>"/>
        <input type="hidden" name="zip_code" value="<?php echo htmlentities($_GET['zip_code'])?>"/>
        <input type="hidden" name="country" value="<?php echo htmlentities($_GET['country'])?>"/>
     </form>
     <br/><br/>
     <a href="" onclick="document.forms.printer_form.submit(); return false;">Printer friendly version</a>   
    </div>
  		<?php include ("footer_shortpage.php"); ?>
  </body>
</html>
