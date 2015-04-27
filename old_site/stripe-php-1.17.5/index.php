
<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/preamble.php"); ?>

<title>Solid Source Design</title>
<!--put scripts and page specific links after this-->

  <!-- The required Stripe lib -->
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
   
  <!-- jQuery is used only for this example; it isn't required to use Stripe -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     
    <script type="text/javascript">
	  // This identifies your website in the createToken call below
	  Stripe.setPublishableKey('pk_test_4WU2YbX2w2Qyw3woVZ1FHlu0');
	  var stripeResponseHandler = function(status, response) {
		var $form = $('#payment-form');
		if (response.error) {
		// Show the errors on the form
		$form.find('.payment-errors').text(response.error.message);
		$form.find('button').prop('disabled', false);
		} else {
		// token contains id, last4, and card type
		var token = response.id;
		// Insert the token into the form so it gets submitted to the server
		$form.append($('<input type="hidden" name="stripeToken" />').val(token));
		// and re-submit
		$form.get(0).submit();
		}
	  };
	  jQuery(function($) {
		$('#payment-form').submit(function(e) {
		var $form = $(this);
		// Disable the submit button to prevent repeated clicks
		$form.find('button').prop('disabled', true);
		Stripe.card.createToken($form, stripeResponseHandler);
		// Prevent the form from submitting with the default action
		return false;
		});
	  });
  </script> 



<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/header.php"); ?>
<!--preceeding include has opening #content tag-->


<!--content goes here-->    

<div style="background:#dcdcdc;min-height:1px;position:relative;z-index:250;-webkit-box-sizing: border-box;moz-box-sizing: border-box;box-sizing: border-box;padding:10px;text-align:center;font-size:24px;border-top:3px solid #606060;"></div>
   

<h1>Charge $10 with Stripe</h1>
 
<form action="http://www.solidsourcedesign.com/stripe-php-1.17.5/processor.php" method="POST" id="payment-form">
	<span class="payment-errors"></span>
 	<p>
        <!--<div class="form-row">-->
            <label>
                <span>Card Number</span>
                <input type="text" size="20" data-stripe="number" value="4242424242424242"/>
            </label>
        <!--</div>-->
    </p>
    <br/>
    <br/><br/>
    <p> 
        <div class="form-row">
            <label>
                <span>CVC</span>
                <input type="text" size="4" data-stripe="cvc" value="123"/>
            </label>
        </div>
    </p>
    <br/><br/><br/>
    <p> 
        <div class="form-row">
            <label>
                <span>Expiration (MM/YYYY)</span>
                <input type="text" size="2" data-stripe="exp-month" value="12"/>
            </label>
                <span> / </span>
                <input type="text" size="4" data-stripe="exp-year" value="2018"/>
        </div>
 	</p>
	<button type="submit">Submit Payment</button>
</form> 
         

<!--include begins with closing #content tag-->			
<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/footer.php"); ?>