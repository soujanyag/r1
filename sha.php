<?php

$secret_access_key = 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==';
$association_id = '00000000-0000-0000-0000-000000000000';
$session_id = '11111111-1111-1111-1111-111111111111';

$message_action = 'http://membersuite.com/contracts/IConciergeAPIService/WhoAmI';
$data = $message_action . $association_id . $session_id;

echo "Data To Sign: $data \r\n";

$hash_hmac_algo = 'sha1';
$key = base64_decode($secret_access_key);
$rawSignature = hash_hmac($hash_hmac_algo, $data, $key, true);
$signature = base64_encode($rawSignature);

echo "Signature: $signature \r\n";
?>