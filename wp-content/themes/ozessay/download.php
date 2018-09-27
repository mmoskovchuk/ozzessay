<?php

if (isset($_GET['file_report'])) {
    $orderId = $_GET['file_report'];
    header("Content-type:application/pdf");
    header("Content-Disposition:inline;filename='report.pdf");
    $curl = curl_init('http://plag-gov.mcemcw.com/api/report/download');
    curl_setopt($curl, CURLOPT_POSTFIELDS, "order_id={$orderId}");
    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
    curl_exec($curl);
    $curl_info = curl_getinfo($curl);

    curl_close($curl);
}
