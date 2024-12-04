<?php

class Calculadora {
    // Método para sumar dos números
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    // Método para restar dos números
    public function restar($num1, $num2) {
        return $num1 - $num2;
    }
}


$calculadora = new Calculadora();

// Crear el servidor SOAP
$server = new SoapServer(null, array('uri' => 'http://localhost/soap_server.php'));

// Añadir la clase Calculadora al servidor SOAP
$server->setClass('Calculadora');

// Manejar la solicitud SOAP
$server->handle();
?>
