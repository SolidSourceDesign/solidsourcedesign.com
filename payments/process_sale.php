<?php

require_once 'payment_processor_settings.php';

if (count($_POST)) {
    $response = new AuthorizeNetSIM;
    if ($response->isAuthorizeNet()) {
        if ($response->approved) {
            // Transaction approved! Do your logic here.
            // Redirect the user back to your site.
			$return_url = $site_root . 'thank_you_page.php?transaction_id=' .$response->transaction_id . '&amount=' .$response->amount . '&acct_number=' .$response->acct_number . '&first_name=' .$response->first_name . '&last_name=' .$response->last_name . '&address=' .$response->address . '&city=' .$response->city . '&state=' .$response->state . '&zip_code=' .$response->zip_code . '&country=' .$response->country;
        } else {
            // There was a problem. Do your logic here.
			/* set up email */
$response_reason_code=$response->response_reason_code;
$response_code=$response->response_code;
$response_reason_text=$response->response_reason_text;
$to="sky@solidsourcedesign.com";
$subject="There was a problem with the payment system";
$message= <<<EOD
response reason code : $response_reason_code
response code : $response_code
response reason text : $response_reason_text
EOD;
mail($to,$subject,$message,$from);
            // Redirect the user back to your site.
            $return_url = $site_root . 'error_page.php?response_reason_code='.$response->response_reason_code.'&response_code='.$response->response_code.'&response_reason_text=' .$response->response_reason_text;
        }
        echo AuthorizeNetDPM::getRelayResponseSnippet($return_url);
    } else {
        echo "MD5 Hash failed. Check to make sure your MD5 Setting matches the one in config.php";
    }
}