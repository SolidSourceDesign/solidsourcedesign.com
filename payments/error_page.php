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
    <div>
      <h3>We're sorry, but we can't process your order at this time due to the following error:</h3>
      <p><?php echo htmlentities($_GET['response_reason_text'])?></p>
      <p>Please contact us for further assistance at 303-859-5551.</p>
    </div>
    </div>
  		<?php include ("footer_shortpage.php"); ?>         
  </body>
</html>
