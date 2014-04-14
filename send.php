<?php
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $message = "Bonjour, vous avez reçu un nouveau message de " . $nom . " <" . $email ."> \r\n\r\n";
    $message .= $_POST["message"];

    $return;

    $headers ='From: "Portfolio Antoine Papi"<antionepapi.com>'."\n"; 
    $headers .='Content-Type: text/plain; charset="utf-8"'."\n"; 
    $headers .='Content-Transfer-Encoding: 8bit'; 

    if(mail('antoine.papi@gmail.com', 'Nouveau message depuis votre Portfolio', $message, $headers)) 
    { 
      $return = "OK";
    } 
    else 
    { 
      $return = null;
    }
    echo $return;
?>