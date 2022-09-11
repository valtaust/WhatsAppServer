<?php
$app_name   = $_POST[“app”];
$senderMum    = $_POST[“senderMum”];
$message    = $_POST[“message”];

$response = array("reply" => "Hello $sender, I am good today $message.");
echo json_encode($response);
?>
