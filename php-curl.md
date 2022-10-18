# php curl 

````
$data = array('key'=>'value');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://example.com/url/test.php");
curl_setopt($ch, CURLOPT_PORT , 443);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSLCERT, getcwd() . "/public_cert.pem");
curl_setopt($ch, CURLOPT_SSLKEY, getcwd() . "/private.pem");
curl_setopt($ch, CURLOPT_CAINFO, "/etc/ssl/certs/ca-certificates.crt");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
 
$response = curl_exec($ch);
$info =curl_errno($ch)>0 ? array("curl_error_".curl_errno($ch)=>curl_error($ch)) : curl_getinfo($ch);
print_r($info);
curl_close($ch);
echo $response;
````
