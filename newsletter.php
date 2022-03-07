<?php
    $email = $_POST['email'];
    $to_email_address = "";// podać adres obiorcy tutak

    mail($to_email_address,"Newsletter_nowy_    uzytkownik",$email,$additional_headers = [], $additional_params = "");


    $url="./index.html";
    header( "Location: $url" )
?>