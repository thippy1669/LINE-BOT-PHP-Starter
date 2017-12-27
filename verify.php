<?php
$access_token = 'vtTEYDjb89HKEpzno0LwQWuZ3fBxAFt+L9bAEUn7fHNeqYgehphEgrzgZexzn+A93tu/9qIipST+mF3cYfdQlh6NLBDkxSKkayvUJ5upw9/ixNGgnu0/Y/MPlmFN1U9go1wtdEr1XgCxqFaJhpiySQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);fbsql_affected_rows

curl_close($ch);

echo $result;  