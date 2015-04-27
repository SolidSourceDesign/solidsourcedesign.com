<?php

require_once 'payment_processor_config.php';


$payment_processor_relay_url = $site_root . "process_sale.php";



$amount= number_format($_POST['amount'],2);