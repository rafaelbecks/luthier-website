<?php

function sendMail($mail,$subject,$content,$from){
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";

        if(@mail($mail,$subject,$content,$headers)){
            echo 1;
        }else
          {
            echo 0;
          }       
    }
     
$subject="Contacto desde website";
$content = 'Has recibido un mensaje de '.$_POST['nombre'].' <strong>(email:'.$_POST['email'].',telefono'.$_POST['telefono'].')</strong> </br> <p> Mensaje:'.$_POST['mensaje'].'</p>';
$from=$_POST['email'];

sendMail("rafaelbecks93@gmail.com",$subject,$content,$from);
sendMail("pjpv9011@gmail.com",$subject,$content,$from);

?>