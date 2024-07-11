<?php
// The API endpoint you're sending the request to // Set the URL /v1/customers/odoo/cliente/
$url = 'https://cfdi40.viixoo.mx/v1/customers/odoo/cliente/';

// The access token
$accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZmMiOiJFS1U5MDAzMTczQzkiLCJuYW1lIjoiRVNDVUVMQSBLRU1QRVIgVVJHQVRFIiwiZXhwIjoxNzIwNzI2Njc4fQ.sm_PI8_NRiMDRHhBVq34hC0bav6C6QS6MAb-w0r1hdI';

// Set the form data as an array
$postData = array(
    'name' => 'Full Name',
    'email' => 'anybody@gmail.com',
    'rfc' => 'CMV060316U27',
    'street' => 'Main street',
    'street2' => 'Secondary Street',
    'city' => 'Mexico City',
    'country_code' => "MX",
    'state_code' => 'CMX',
    'zip' => '123456',
    'id_intranet' => '0202545454021'
);

$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Indicate that we want to send a POST request
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData)); // Encode the data as JSON
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $accessToken,
    'Content-Type: application/json',
    'mode: test',
]);

// Execute cURL session and capture the response
$response = curl_exec($ch);

$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo 'Response code: '. $response_code. '<br/>';

// Check for errors
if (curl_errno($ch)) {
  echo 'Error: ' . curl_error($ch);
} else {
  // Process the response
  echo 'Response: ' . $response;
}

// Close cURL session
curl_close($ch);

?>