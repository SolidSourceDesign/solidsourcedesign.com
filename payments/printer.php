
<!doctype html>
<html>
  <head>
    <title>Solid Source Design Payments</title>
    <link href="../images/favicon3.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="payments_styles.css">
  </head>
  <body class="print">

  	<div ><a href="http://www.solidsourcedesign.com/index.php" style="text-decoration:none;border:none;"><img  style="border:none;" class="logo" src="../images/Solid_Source_Design_Logo_no_back_gray_matte.png"/></a><a style="position:absolute;right:10px;top:10px;" href="http://www.solidsourcedesign.com/index.php">Return to homepage</a></div>
    <div class="content">
    <h1>Online Payments</h1>
    <h2>Thank you for choosing Solid Source!</h2>
    <h3>Approved</h3>
    	<div>Transaction ID: <?php echo htmlentities($_GET['transaction_id'])?></div>
    	<div>Date/time: <?php echo htmlentities($_GET['date'])?></div>
    	<div>Amount: $<?php echo htmlentities($_GET['amount'])?> USD</div>
    	<div>Card: <?php echo htmlentities($_GET['acct_number'])?></div>
    	<div>Name: <?php echo htmlentities($_GET['first_name'])?> <?php echo htmlentities($_GET['last_name'])?></div>
    	<div>Address: <?php echo htmlentities($_GET['address'])?></div>
    	<div><?php echo htmlentities($_GET['city'])?>, <?php echo htmlentities($_GET['state'])?> <?php echo htmlentities($_GET['zip_code'])?>   <?php echo htmlentities($_GET['country'])?></div>
    <br/><br/>
    <a href="javascript:window.print()">Print this page</a>
    </div>
  		
  </body>
</html>
