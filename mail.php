<?php

$para="andresurrego1991@gmail.com";
$nombre=$_POST["nombre"];
$asunto="Mi website enviado por $nombre:".$_POST["asunto"];
$mensaje=$_POST["mensaje"];
$de=$_POST["mail"];

//es para que no lo tome como spam
$headers="MIME-Version:1.0;\r\n";
$headers .="Content-type:text/html; \r\n charset=iso-8859-1; \r\n";
$headers .="From: $de \r\n";
$headers .="To: $para; \r\n Subject:$asunto \r\n";

if(mail($para,$asunto,$mensaje,$headers)){
    echo "Enviado Correctamente";
}else{
    echo "Fallo en envio";
}


?>