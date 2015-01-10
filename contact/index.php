<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/preamble.php"); ?>

<title>Best service in web design - Contact Solid Source Design</title>
<meta name="description" content="We're available for big and small projects offering professional website design, development, repair, updates, and redesigns. Request a call from us today.">
<meta name="keywords" content="">
<!--put scripts and page specific links after this-->
<script src="../js/validate_contact_form.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="../js/jquery.validate.js"></script>
<script>

$(document).ready(function(){ 
	
$.validator.setDefaults({
		submitHandler: function() { 
		    var actionUrl = $('#contact_form').attr('action');
		    $('#contact_form').hide(200);
			$('#progress_bar').show(200);
		    $.ajax({
  		    	type: 'POST',
  		    	url: actionUrl,
  		    	data: $('#contact_form').serialize(),
  		    	success: function(msg){
  		    		
					$('#progress_bar').hide(200);
  		    		$('#reponse_msg').html(msg);
  		    	}
		    });
		    
		    return false;
		}
	});
	
	$('#contact_form').validate({
		rules: {
		    your_name: "required",
		    email: {
		    	required: true,
		    	email: true
		    },
		    message: "required"
		},
		messages: {
		    your_name: "Please enter your name",
		    email: "Please enter a valid email address",
		    agree: "Please enter some message"
		}
	});		

});

</script>

<style>
#contact_main_nav {
	-webkit-box-shadow:  0px 0px 2px 0 black inset;
    -moz-box-shadow:  0px 0px 2px 0 black inset;
    box-shadow:  0px 0px 2px 0 black inset;
}

</style>
<?php
if(!isset($_POST['your_name']))
{
 

?>
<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/header.php"); ?>
<!--preceeding include has opening #content tag-->


<!--content goes here-->   
<div style="background:#dcdcdc;min-height:10px;position:relative;z-index:250;-webkit-box-sizing: border-box;moz-box-sizing: border-box;box-sizing: border-box;padding:20px;text-align:center;font-size:24px;border-top:3px solid #606060;"></div>
    <br/>
    <div style="padding:60px;padding-top:10px;">
    
    <div style="position:relative;z-index:1;">
        <strong><span style="font-size:40px;margin-left:20px;display:block;line-height:8px;">Ready to talk about your project?</span>
        
        <span style="font-size:30px;margin-left:450px;display:block;">Here are the best ways to get ahold of us:</span></strong>
        <br/><br/>
        <div style="position:absolute; right:-60px; top:1px;  width:100%; height:45px;z-index:-100;overflow:hidden;">
            <div style="background-image:url(../images/accent_bar_01.png); position:absolute; left:0px; top:0px; width:521px; height:45px;" title="">
            </div>
            <div style="background-image:url(../images/accent_bar_02.png); position:absolute; left:521px; top:0px; width:50%; height:45px;" title="">
            </div>
        </div>
    </div>
    </div>
    <!--<div style="background:#FFF;width:100%;min-height:50px;position:relative;z-index:250;"><p ></p></div>-->
    <br/>
   

<div  class="call_to_action left">
	            <p class="get_started" ><em>Let us call you.</em></p>
                <p>Please choose a contact method:</p>
                  <div id="request_form_container">    
                          <form id="form1" name="form1" method="post" onsubmit="return validateForm()" action="../landing_page_contact/form_processor.php">  
                            <div class="center_outer">
                                <div class="center_inner">                        	
                                    <label class="left pointer" style="width:auto;">
                                    <input name="contact_method" value="phone" id="contact_method_0" type="radio" class="pointer" onclick="
                                        if (document.forms['form1'].elements['contact_method'][0].checked==true) {
                                            document.getElementById('textfield3').style.display='inline';
                                            document.getElementById('textfield3_label').style.display='inline';
                                       		document.getElementById('textfield4').style.display='none';
                                            document.getElementById('textfield4_label').style.display='none';
                                            } 
                                            return true;">
                                    <img src="../images/phone_button_small.png" alt="Phone" class="small_button"  title="We'll call you on your phone."/></label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label class="pointer" style="width:auto;float:none;">
                                    <input name="contact_method" value="skype" id="contact_method_1" type="radio" class="pointer" onclick="
                                        if (document.forms['form1'].elements['contact_method'][1].checked==true) {
                                            document.getElementById('textfield4').style.display='inline';
                                            document.getElementById('textfield4_label').style.display='inline';
                                       		document.getElementById('textfield3').style.display='none';
                                            document.getElementById('textfield3_label').style.display='none';
                                            } 
                                            return true;">
                                    <img src="../images/skype_button_small.png" alt="Skype" class="small_button"  title="Let's have some face-to-face time with a videocall." style="margin-top:4px;"/></label>
                                </div>
                            </div>
                            <p><label for="textfield">First name:*</label>
                            <input type="text" name="first_name" id="textfield" /></p>
                            
                            <p><label for="textfield2">Last name:*</label>
                            <input type="text" name="last_name" id="textfield2" /></p>
                            
                            <p><label for="textfield3" class="hidden" id="textfield3_label">Phone number:*</label>
                            <input type="text" name="phone_number" id="textfield3"  class="hidden"/></p>
                            
                            <p><label for="textfield4"  class="hidden" id="textfield4_label">Skypename:*</label>
                            <input type="text" name="skypename" id="textfield4"  class="hidden"/></p>
                            
                            <p><label for="textarea">Please state a few preferred dates/times:*</label>
                            <textarea name="preferred_times" id="textarea" cols="13" rows="3"></textarea></p>
                            <div class="clear"></div>
                            <div style="float: right;margin-right: 20px;"><p style="font-size:14pt;text-align: right;">*required</p></div>
                            <div class="clear"></div>
                            
                            
                            
                            
                            <div style="height:50px;position:absolute;bottom:70px;width:100%;text-align:center;">
                                <input type="submit" name="button" class="contact_button pointer" value="Request a call" style="">
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            <div class="clear"></div>
                            
                        </form>
               		
           		</div><!--end request form container-->
            </div> <!--end call_to_action-->
            
            

<div class="left call_to_action" style="width:60%;margin-left:25px;">
<p class="get_started" ><em>Send us an email.</em></p>
<form id="contact_form" method="post" action="//solidsourcedesign.com/contact/index.php">
						    <p><br/><br/>
						    	<label for="your_name">Name:*</label>
						    	<input id="your_name" name="your_name" type="text" style="width:370px"/>
						    </p>
						    <p style="margin-top:20px">
						    	<label for="email">Email:*</label>
						    	<input id="email" name="email" type="text" style="width:370px"/>
						    </p>
						    <p style="margin-top:20px">
						    	<label for="message">Message:*</label>
						    	
						    	<textarea name="message" id="message" cols="50" rows="5" style="width:370px"></textarea>
						    </p>
						    <div style="float: right;margin-right: 20px;"><p style="font-size:14pt;text-align: right;">*required</p></div>
							
						    
						    <p style="margin-top:30px"><br/>
                            <div style="height:50px;position:absolute;bottom:70px;width:100%;text-align:center;">
								<input type="submit" name="button" class="button contact_button pointer" value="Send Message" />
							</div>		
							</p>
						</form>
						<div id="progress_bar" style="display:none;text-align:center;"><img src="//solidsourcedesign.com/images/Minimap_Loading.gif" alt="Loading, please wait..."/><br/>Form being submitted. Please be patient...</div>
						<div id="reponse_msg" style="text-align:center;"><br/></div>
</div>
            
            
<?php
}

//if submit form
else
{           
            


	/*
	|--------------------------------------------------------------------------
	| Mailer module
	|--------------------------------------------------------------------------
	|
	| These module are used when sending email from contact form
	|
	*/
	
	//Set your email address
	$contact_email = "service@solidsourcedesign.com";
	
	//Enter your email address, email from contact form will send to this addresss. Please enter inside quotes ('myemail@email.com')
	define('DEST_EMAIL', $contact_email);
	
	//Change email subject to something more meaningful
	define('SUBJECT_EMAIL', 'Email from Solid Source contact form');
	
	//Thankyou message when message sent
	define('THANKYOU_MESSAGE', 'Thank you! We will get back to you as soon as possible.');
	
	//Error message when message can't send
	define('ERROR_MESSAGE', 'Oops! Something went wrong, please try to submit later.');
	
	
	/*
	|
	| Begin sending mail
	|
	*/
	
	$from_name = $_POST['your_name'];
	$from_email = $_POST['email'];
	
	$message = 'Name: '.$from_name.PHP_EOL;
	$message.= 'Email: '.$from_email.PHP_EOL.PHP_EOL;
	$message.= 'Message: '.PHP_EOL.$_POST['message'];
	    
	
	if(!empty($from_name) && !empty($from_email) && !empty($message))
	{
		mail(DEST_EMAIL, SUBJECT_EMAIL, $message);
	
		echo THANKYOU_MESSAGE;
		echo '</p>';
		
		exit;
	}
	else
	{
		echo ERROR_MESSAGE;
		
		exit;
	}
	
	/*
	|
	| End sending mail
	|
	*/
}

?>          
            
            
		<div class="clear"><br/><br/></div>

<!--include begins with closing #content tag-->			
<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/footer.php"); ?>