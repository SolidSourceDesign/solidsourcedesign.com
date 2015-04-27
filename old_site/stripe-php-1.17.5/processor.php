<?php
	
	if (isset($_POST['stripeToken'])) {
		print "hello";
		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here https://dashboard.stripe.com/account
			Stripe::setApiKey("sk_test_BQokikJOvBiI2HlWgH4olfQ2");
			
		// Get the credit card details submitted by the form
			$token = $_POST['stripeToken'];
			print $token;
		// Create the charge on Stripe's servers - this will charge the user's card
			try {
			$charge = Stripe_Charge::create(array(
			  "amount" => 1000, // amount in cents, again
			  "currency" => "usd",
			  "card" => $token,
			  "description" => "payinguser@example.com")
			);
			} catch(Stripe_CardError $e) {
			  // The card has been declined
			  print "there was an error apparently";
			}
	}
?>

<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/preamble.php"); ?>

<title>Solid Source Design</title>
<!--put scripts and page specific links after this-->



<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/header.php"); ?>
<!--preceeding include has opening #content tag-->


<!--content goes here-->           
         

<!--include begins with closing #content tag-->			
<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/footer.php"); ?>