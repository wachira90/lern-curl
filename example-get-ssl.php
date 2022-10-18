<?php
$ch = curl_init();

$url = 'https://www.test1.com/apiv1/product';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// curlopt_ssl_verifypeer  (checking the CA auth chain)
// curlopt_ssl_verifyhost  (hostname/certname match checks)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$result = curl_exec($ch);
curl_close($ch);

var_dump(json_decode($result, true));
