<?php
//$xml = file_get_contents("thexmlfile.xml");
$xml = $propertyXml->asXML();
$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_CAINFO, getcwd() . '\pemfile.pem');
curl_setopt($ch, CURLOPT_URL, "https://adfapi.adftest.rightmove.com/v1/property/sendpropertydetails");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSH_PRIVATE_KEYFILE, getcwd() . '\myjks.jks');
curl_setopt($ch, CURLOPT_SSLCERT, getcwd() . '\pemfile.pem');
curl_setopt($ch, CURLOPT_SSLCERTPASSWD, "thesslpassword");
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_REFERER, "https://adfapi.adftest.rightmove.com/v1/property/sendpropertydetails");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$ch_result = curl_exec($ch);
print curl_errno($ch);
print curl_error($ch);
echo "Result = " . $ch_result;
curl_close($ch);
