<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "leaguilar2@espe.edu.ec";
  $subject = "Nuevo mensaje de contacto";
  $headers = "From: " . $email . "\r\n";
  
  $result = mail($to, $subject, $message, $headers);
  
  if ($result) {
    echo "Su mensaje se ha enviado correctamente. Le contestaremos lo antes posible.";
  } else {
    echo "Ha ocurrido un error al enviar el mensaje.";
  }
}
?>