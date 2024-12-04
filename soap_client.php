<?php
// Definimos la URI del servicio SOAP
$uri = 'http://localhost/soap_server.php';

// Creamos el cliente SOAP sin WSDL
$client = new SoapClient(null, array(
    'uri' => $uri,
    'location' => $uri
));

// Llamamos al método 'sumar' del servicio con los parámetros 10 y 20
$resultado = $client->__soapCall('sumar', array(110, 20));

// Mostramos el resultado
echo "El resultado de la suma es: " . $resultado;
?>
