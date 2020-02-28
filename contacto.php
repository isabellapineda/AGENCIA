<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$Nombre = Trim(stripslashes($_POST['Nombre']));
$Subject = Trim(stripslashes($_POST['Subject'])); 
$Telefono = Trim(stripslashes($_POST['Telefono']));
$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "agencia@comunicando.cl, directora@vallesdelsol.cl"; 
$Mensaje = Trim(stripslashes($_POST['Mensaje'])); 

// validation
$validationOK=true;
if (Trim($Nombre)=="") $validationOK=false;
if (Trim($Telefono)=="") $validationOK=false;
if (Trim($EmailFrom)=="") $validationOK=false;
if (Trim($Mensaje)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=fail.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $Nombre;
$Body .= "\n";
$Body .= "Telefono: ";
$Body .= $Telefono;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $Mensaje;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=fail.html\">";
}
?>