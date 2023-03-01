<?php

$api_key = "Your API Key";

$data = [
    'name' => 'abbas roholamin',
    'email' => 'abbas@example.com'
];


// $ch = curl_init();
// curl_setopt_array($ch, [
//     CURLOPT_URL => 'https://api.stripe.com/v1/customers',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POSTFIELDS => http_build_query($data),
//     CURLOPT_USERPWD => $api_key
// ]);
// $data = curl_exec($ch);
// curl_close($ch);
// var_dump($data);


require __DIR__ . "/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);

$customer = $stripe->customers->create($data);

echo $customer;