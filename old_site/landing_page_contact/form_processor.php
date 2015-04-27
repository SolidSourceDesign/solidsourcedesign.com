<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/preamble.php"); ?>

<title>Solid Source Design</title>
<!--put scripts and page specific links after this-->



<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/header.php"); ?>
<!--preceeding include has opening #content tag-->


<!--content goes here--> 

<div style="background:#dcdcdc;min-height:10px;position:relative;z-index:250;-webkit-box-sizing: border-box;moz-box-sizing: border-box;box-sizing: border-box;padding:20px;text-align:center;font-size:24px;border-top:3px solid #606060;"></div>
    <br/>

          
<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone_number=$_POST['phone_number'];
$skypename=$_POST['skypename'];
$preferred_times=$_POST['preferred_times'];
$contact_method=$_POST['contact_method'];

if (empty($first_name)||empty($last_name)||empty($preferred_times)) {
	echo "There was a problem with your form submission. Please contact us at 303-859-5551.";
	
} else {


$to = "service@solidsourcedesign.com";
$subject = "Request for callback";
$message =<<<EOF
First name: $first_name
Last name: $last_name
Preferred times: $preferred_times
Preferred contact method: $contact_method
Skypename: $skypename
Phone number: $phone_number
EOF;
$from = "Solid Source client" . " " . $first_name . " " . $last_name;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
$success_message=<<<EOD
		<div style="text-align:center;width:100%;">Thank you! We will be getting back to you very soon.</div>
EOD;
echo $success_message;
}
?>         

<div style="text-align:center;width:100%;"><a href="http://www.solidsourcedesign.com/index.php">Return to homepage</a></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<!--include begins with closing #content tag-->			
<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/footer.php"); ?>





