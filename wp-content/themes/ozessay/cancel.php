<?php

$hostName = $_SERVER['SERVER_NAME'];

$curl = curl_init('http://plag-gov.local/api/pay-pal/get-cancel');

$data = [
    'hostname' => $hostName
];

curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
echo $out;
curl_close($curl);