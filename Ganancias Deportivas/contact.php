<?php

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'contact':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        $email_from = "Sitio Ganancias Depotivas";
        $email_subject = "Consulta";
        $email_body = "Nombre: $name.\n".
        "Email: $email.\n".
        "Mensaje: $message.\n"; 
        $to = "consultas@ganancias-deportivas.com.ar";
        $headers = "De: $email_from \r\n";
        $headers.= "Responder a: $email \r\n";
        mail($to, $email_subject, $email_body, $headers);
        header("location: gracias.php");
        break;
    case 'referido':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $cod_area = filter_input(INPUT_POST, 'cod_area', FILTER_SANITIZE_NUMBER_INT);
        $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);
        $email_from = "Sitio Ganancias Depotivas";
        $email_subject = "Solicitud de LINK de referido";
        $email_body = "Nombre: $name.\n".
        "Email: $email.\n".
        "Celular: ($cod_area) $celular\n";
        $to = "consultas@ganancias-deportivas.com.ar";
        $headers = "De: $email_from \r\n";
        $headers.= "Responder a: $email \r\n";
        mail($to, $email_subject, $email_body, $headers);
        header("location: gracias.php");
        break;
    default:
        include 'index.php';
}

?>