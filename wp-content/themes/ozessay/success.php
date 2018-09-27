<?php

$hostName = $_SERVER['SERVER_NAME'];
$paymentId = $_GET['paymentId'];
$token = $_GET['token'];
$PayerID = $_GET['PayerID'];

$curl = curl_init('http://plag-gov.local/api/pay-pal/get-approve');

$data = [
    'paymentId' => $paymentId,
    'token' => $token,
    'PayerID' => $PayerID,
    'hostname' => $hostName
];

curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
echo $out;
curl_close($curl);