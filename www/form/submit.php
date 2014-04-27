<?php
    $to      = 'via.das.estrelas@gmail.com';
    $subject = 'Form contacto mariaconceicaopinho.com';
    
    $message = '<html><body>';
    $message .= '<h1>Formulário de contacto:</h1>';
 
    $message.= 'Nome: ';
    $message.= '<strong>' . $_POST['name'] . '</strong>';
 
    $message.= '<br>Contacto: ';
    $message.= '<strong>' . $_POST['contact'] . '</strong>';
 

    $message.= '<br>mensagem:<br>';
    $message.= '<strong>' . $_POST['message'] . '</strong>';
 
    $message .= '</body></html>';

    $headers = 'From: mariaconceicaopinho@mariaconceicaopinho.com' . "\r\n" .
    'Reply-To: mariaconceicaopinho@mariaconceicaopinho.com' . "\r\n" .
    'MIME-Version: 1.0\r\n' . "\r\n" .
    'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>