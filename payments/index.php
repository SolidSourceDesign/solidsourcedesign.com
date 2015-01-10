<!doctype html>
<html>
  <head>
    <title>Solid Source Design Payments</title>
    <link href="../images/favicon3.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="payments_styles.css">
    <script type="text/javascript"> //checks to make sure it's not empty
            function check()
            {
                if (!frm1.amount.value)
                {
                    alert ("Please enter an amount.");
                    return (false);
                }
                return (true);
            }
    </script>
    <script>  //checks to make sure its only allowed chars
		function validate(evt) {
		  var theEvent = evt || window.event;
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode( key );
		  var regex = /[0-9 _.,!"'/$]*/;
		  if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		  }
		}
	</script>
  </head>
  <body>
  	<div class="back"><img class="back_img" src="../images/slate_back.png"/></div>
  	<div ><a href="http://www.solidsourcedesign.com/index.php" style="text-decoration:none;border:none;"><img  style="border:none;" class="logo" src="../images/Solid_Source_Design_Logo_no_back_gray_matte.png"/></a><a style="position:absolute;right:10px;top:10px;" href="http://www.solidsourcedesign.com/index.php">Return to homepage</a></div>
    <div class="content">
    <h1>Online Payments</h1>
    
    <form method="post" action="confirm_amount.php" name="frm1">
      
        <div>
		  <label for="amount" class="long_label">Please enter the amount you are paying (USD): $</label>
          <input type="text" name="amount" onkeypress="validate(event)" autofocus>
          <input type="submit" class="submit" value="Continue" onclick="return check()">
        </div> 
      
      
    </form>
    </div>
     <?php include ("footer_shortpage.php"); ?>         
  </body>
</html>
