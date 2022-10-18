<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$url = 'http://localhost/testcurl/show.php';

$postdata = array(
    'id' => '4587',
    'order' => '4854',
	'name' => 'Samolo King'
);

$ch = curl_init($url);

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

$ret = curl_exec($ch);

curl_close($ch);

echo 'return = ' . $ret . "\n";
?>
