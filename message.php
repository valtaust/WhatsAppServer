<?php
$app_name   = $_POST[“app”];
$Mum    = $_POST[“Mum”];  
$message    = $_POST[“message”];

$response = array("reply" => "Hello $Mum, I am good now, preparing for tomorrow $message.");
echo json_encode($response);
?>
