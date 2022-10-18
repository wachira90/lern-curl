<?php
function generateToken() {
$service_url = 'https://URLToAccess';
$curl = curl_init ( $service_url );

$loginRequest = array (
'username' => 'testUser',
'password' => 'test123',
);

$data_string = json_encode ( $loginRequest );
print_r($data_string);
$options = array (
CURLOPT_RETURNTRANSFER => true, // true to return the result as string of value
CURLOPT_HTTPHEADER => array (
'Content-Type: application/json','Content-Length: ' . strlen ( $data_string ) //sets custom HTTP headers
)
);
curl_setopt_array ( $curl, $options ); //setting options for curl request
curl_setopt ( $curl, CURLOPT_CUSTOMREQUEST, "POST" ); //sending the request as post/get

// connect to the link via SSL without checking certificate
curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false); //false will prevent curl from verifying the SSL certificate

$response_json = curl_exec ( $curl ); //execute curl
curl_close ( $curl );
$response = json_decode($response_json ,true); //decoding the response in json format
print_r($response);
}

generateToken(); //calling the function
