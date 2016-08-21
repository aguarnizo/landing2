
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Contacto</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            function Redireccionar(){
                window.location='validarForm3.html';
            }
            //nos permite ralentizar, dar un tiempo de espera
            setTimeout('Redireccionar()', 4000);
        </script>
    </head>
    
    <body>
        <div class="container">
            <?php
    if(isset($_POST['nombre'])&&($_POST['celular']!='')&&($_POST['empresa']!='')&&($_POST['tamano']!='')&&($_POST['pais']!='')&&($_POST['email']!='')){
        //simplicidad
        $nombre=$_POST['nombre'];
        $celular=$_POST['celular'];
        $empresa=$_POST['empresa'];
        $tamano=$_POST['tamano'];
        $pais=$_POST['pais'];
        $email=$_POST['email'];
        
        
        //contenido del mensaje
        $titulo="Mensaje de la web enviando por IKONOSOFT";
         $datos="
            Nombre:$_POST[nombre]
            Celular de Contacto:$_POST[celular]
            Empresa:$_POST[empresa]
            Tamaño de la Empresa:$_POST[tamano]
            País:$_POST[pais]
            Email:$_POST[email]
               
            ";
        /*$contenido= '
                       <html>
                            <head><title>' . $titulo . '</title></head>
                        <body>
                        <h1>Haz recibido un mensaje de la web de IKONOSOFT</h1>
                        <p>El visitante <strong>' . $nombre . ' </strong> te ha enviado el siguiente mensaje: </p>
                        
                        <hr>
        
                        <p>Este mensaje  ha sido generado automaticamente</p>
                        </body>
                        </html> 
                    ';*/
        /*<p>Mensaje: ' . $mensaje . ' <br><br> Puedes ponerte en contacto al email: ' . $email . ' </p>*/
        //para el envío en formato HTML 
        //$encabezado  ="MIME-Version:1.0;\r\n";
        //$encabezado .="Content-type:text/html; \r\n charset=UTF-8; \r\n";
        //escriba la direccion del correo que existe en el servidor-dirección del remitente
        $encabezado ="From: Ikonosoft.com <anderson.guarnizo@ikonosoft.com>\r\n";
        ////dirección de respuesta, si queremos que sea distinta que la del remitente
        //direcciones que recibirán copia oculta 
       // $encabezado .="Bcc: anderson.guarnizo@ikonosoft.com\r\n";
        
        //envio de mail
        //$envio=mail($email,$titulo,$datos,$encabezado);
        /*
        if($envio==true){
            echo "<h1>El mensaje se ha enviado correctamente</h1>";
        }
        else{
            echo "Se ha presentado un error";
        }*/
        mail($email,$titulo,$datos,$encabezado);
            echo "Enviado Correctamente";
            /*return true;
        }else{
            echo "Fallo en envio";
            return false;
        }
    }

    else{
        echo "<h1>Se ha presentado un error, completa los campos del formulario</h1>";
    }*/
    }
?>
           <h2><img src="loading.gif" alt="">Te estamos redireccionando al sitio web... </h2>

        </div>
    </body>

</html>
