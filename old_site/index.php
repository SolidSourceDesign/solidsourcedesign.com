<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/preamble.php"); ?>

<title>Web design and development that performs - Solid Source Design</title>
<meta name="description" content="Your website says a lot about your organization. Get yours built right or get professional support for your existing site. Request a call from us today.">
<meta name="keywords" content="">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script><!--start responsive slider-->
<script src="responsive_slider/responsiveslides.js"></script>
<link href="responsive_slider/responsiveslides.css" rel="stylesheet" type="text/css" />
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script> <!--end responsive slider-->


<!--<link rel="stylesheet" href="comment_ticker/style.css" type="text/css" media="screen" />--><!--begin comment ticker-->
<!--<script src="comment_ticker/jquery-latest.pack.js" type="text/javascript"></script>-->
<script src="comment_ticker/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:false,
		visible: 2,
		auto:4500,
		speed:1000
	});
}); 
</script><!--end comment ticker-->

<script src="js/validate_contact_form.js" type="text/javascript"></script>

<style>
#home_main_nav {
	-webkit-box-shadow:  0px 0px 2px 0 black inset;
    -moz-box-shadow:  0px 0px 2px 0 black inset;
    box-shadow:  0px 0px 2px 0 black inset;
}

</style>



<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/header.php"); ?>

           
         
         <div id="slider_container">
            <ul class="rslides">
                <li><img src="images/builtrightslide.jpg" alt="We'll get your site built right." title="Our websites are built to perform."></li>
                <li><img src="images/paymentsordersslide.jpg" alt="Accept payments online." title="We can offer multiple ways of accepting credit cards and sending bills."></li>
                <li><img src="images/backendslide.jpg" alt="If you need a CMS, we'll set it up for you." title="We can build you a site that you can update yourself."></li>
                <li><img src="images/connectonlineslide.jpg" alt="Millions of customers are waiting for you to stimulate their interest on the web." title="A beautiful web design will make your website stand out."></li>
                
                
            </ul>	
         </div> <!--end slider_container-->

            <div id="call_to_action_explanation">
            
            
            
            
                        <div class="call_to_action left" style="margin-right:35px;margin-bottom:35px;min-height:500px;">
	            <p class="get_started" ><em>Get started today!</em></p>
                <p>Choose a contact method:</p>
                  <div id="request_form_container">    
                          <form id="form1" name="form1" method="post" onsubmit="return validateForm()" action="landing_page_contact/form_processor.php">  
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
                                    <img src="images/phone_button_small.png" alt="Phone" class="small_button" title="We'll call you on your phone."/></label>
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
                                    <img src="images/skype_button_small.png" alt="Skype" class="small_button" title="Let's have some face-to-face time with a videocall." style="margin-top:4px;"/></label>
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
                            <input type="submit" name="button" class="contact_button pointer" value="Request a call">
                            <div class="clear"></div>
                            
                        </form>
               
           		</div><!--end request form container-->
            </div> <!--end call_to_action-->
            
            
            
            
            
            
            
            
            
            
            
                        <!--<br/><img src="images/right_there_arrow.png" class="left small_button" style="padding-left:15px;padding-right:15px;" />--><p style="padding-top:10px;padding-left:20px;padding-right:20px;">Solid Source Design is a small international team dedicated to creating the most powerful, elegant websites available. Each one is a detailed fusion of form and function, elegance and performance, all in the effort to help you stand out on the web. Whether you're just starting your project and want to make an investment in a high-quality solution or already have a complete site or site in progress and need some professional assistance, we have the knowledge, creativity, and experience to help you to the next level.</p>
                 		<br/>
                        <p style="padding-left:20px;padding-right:20px;">While we're certainly passionate about web technology development, we're so much more than just another company building websites. Our team is composed of people who are not only tremendously gifted designers and coders, but also have backgrounds in areas such as business, both international and domestic, conventional and internet marketing, and fine arts. We even have extensive knowledge of the cognitive psychology that drives how people understand and interact with web interfaces.
</p>
                        <br/>
                        <p style="padding-left:20px;padding-right:20px;">Please enter your name, phone number, and some times we can get in touch with you and we'll call you to talk about your project. You can choose to receive a call on the phone or through Skype. Also feel free to contact us via <a href="mailto:service@solidsourcedesign.com">email</a> or chat with us on our social media channels. You can use the navigation bar above to explore the portfolio or learn more about websites, how they work, what you'll need in yours, and what to plan for in getting yours.</p>
            </div> <!--end call_to_action_explanation-->
                        
                        
                        
                        

                        
                        
                        
                        
                        
                        
                        
                        
            <br/><br/><hr class="style-seven"/>
            <div id="newsticker-demo">    
                <div class="title">See what others are saying about Solid Source Design</div>
                <div class="newsticker-jcarousellite">
                    <ul>
                        <li>
                            <!--<div class="thumbnail">
                                <img src="comment_ticker/images/avatar_female_dark_on_clear_200x200.png">
                            </div>-->
                            <div class="info">
                                "Solid Source is an incredible company! I'd recommend them to anyone!"
                                <span class="cat">Sheryl Kahl of Longmont, CO</span>
                            </div>
                            <div class="clear"></div>
                        </li>
                        
                        <li>
                            <!--<div class="thumbnail">
                                <img src="comment_ticker/images/avatar_male_dark_on_clear_200x200.png">
                            </div>-->
                            <div class="info">
                                 "I liked you as you did not go about it like a 'business jerk'... That's just me.  I'm a rock musician who doesn't like corporate stuff, and you were really cool and human."
                                <span class="cat">Alex Smith of Boulder, CO</span>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <!--<div class="thumbnail">
                                <img src="comment_ticker/images/avatar_female_dark_on_clear_200x200.png">
                            </div>-->
                            <div class="info">
                                "Your work has been so great. Thank you for your patience."
                                <span class="cat">Thea Soroyan of Niwot, CO</span>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <!--<div class="thumbnail">
                                <img src="comment_ticker/images/avatar_female_dark_on_clear_200x200.png">
                            </div>-->
                            <div class="info">
                                "Solid Source, Great work on the website. It works great, of course, and I love the look."
                                <span class="cat">J. Tamar Stone of Boulder, CO</span>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <!--<div class="thumbnail">
                                <img src="comment_ticker/images/avatar_female_dark_on_clear_200x200.png">
                            </div>-->
                            <div class="info">
                                "My Oh My! ...thank you for all your work."
                                <span class="cat">Jules Juno of Boulder, CO</span>
                            </div>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <!--<div class="thumbnail">
                                <img src="comment_ticker/images/avatar_male_dark_on_clear_200x200.png">
                            </div>-->
                            <div class="info">
                                "Great job! Thanks."
                                <span class="cat">Ron Aarons of Boulder, CO</span>
                            </div>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
                
            </div><!--end newsticker-demo-->
			
<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/footer.php"); ?>