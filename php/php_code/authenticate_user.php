<?php
// Initialize a cURL session
$ch = curl_init();

// Set the URL
curl_setopt($ch, CURLOPT_URL, "https://cfdi40.viixoo.mx/v1/customers/token/");

// Indicate that we want to send a POST request
curl_setopt($ch, CURLOPT_POST, 1);

// Set the form data as an array
$data = array(
    'username' => 'EKU9003173C9',
    'password' => 'OLTjPoKTX1PoauEJ_ZT2WEHioUs'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// Indicate that we want the response as a string instead of outputting it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Print the response
echo $response;
?>