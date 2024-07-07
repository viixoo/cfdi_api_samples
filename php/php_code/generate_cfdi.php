<?php
// The API endpoint you're sending the request to // Set the URL /v1/customers/timbrado/json/
$url = 'https://cfdi40.viixoo.mx/v1/customers/timbrado/json/';

// The access token
$accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZmMiOiJFS1U5MDAzMTczQzkiLCJuYW1lIjoiRVNDVUVMQSBLRU1QRVIgVVJHQVRFIiwiZXhwIjoxNzIwMzcxODEwfQ.Rw5QptD7BnCGloZnlCpFPcOhEFZBm8DvlDQ_OhxB1qo';

// Set the form data as an array
$postData = array(
  "id_operacion" => "1",
  "invoice_required" => "true",
  "conceptos_list" => array(
    array(
      "cantidad" => 15,
      "clave_prod_serv" => "53131610",
      "clave_unidad" => "H87",
      "description" => "[0000000001] Lagrimas artificiales",
      "importe" => 750,
      "no_identificacion" => "0000000001",
      "objeto_imp" => "02",
      "traslados_list" => array(
        array(
          "base" => 750,
          "importe" => 120,
          "impuesto" => "002",
          "tasa_o_cuota" => 0.16,
          "tipo_factor" => "Tasa"
        )
      ),
      "unidad" => "UNIDADES",
      "valor_unitario" => 50
    )
  ),
  "emisor" => array(
    "nombre" => "ESCUELA KEMPER URGATE",
    "regimen_fiscal" => "601",
    "rfc" => "EKU9003173C9"
  ),
  "exportacion" => "01",
  "fecha" => "2024-03-25T04:17:10",
  "folio" => "33",
  "forma_pago" => "99",
  "lugar_expedicion" => "20928",
  "metodo_pago" => "PUE",
  "moneda" => "MXN",
  "receptor" => array(
    "domicilio_fiscal_receptor" => "20928",
    "nombre" => "FARMACIAS LUMAX",
    "regimen_fiscal_receptor" => "616",
    "rfc" => "XAXX010101000",
    "uso_cfdi" => "S01"
  ),
  "serie" => "INV/2024/",
  "subtotal" => 750,
  "tipo_de_comprobante" => "I",
  // "tipo_relacion" => "04", // Si se define un tipo de relación, entonces de debe definir al menos un documento relacionado
  /* "cfdi_relationado_list": [
    "ed2aa9d0-0213-4aa7-a7a4-2734b7bd6993"
  ], */
  "total" => 870,
  "total_impuestos_trasladados" => 120,
  "traslados_list" => array(
    array(
      "base" => 750,
      "importe" => 120,
      "impuesto" => "002",
      "tasa_o_cuota" => "0.160000",
      "tipo_factor" => "Tasa"
    )
  )

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
