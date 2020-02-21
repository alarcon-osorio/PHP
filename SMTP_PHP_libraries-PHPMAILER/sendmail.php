//Para los envíos desde hotmail o outlook:
$smtp->SMTPAuth   = true;
$smtp->SMTPSecure = "tls";
$smtp->Host       = "smtp.live.com";
$smtp->Username   = "miCuenta@outlook.com";
$smtp->Password   = "miPassword";
$smtp->Port       = 25;

//Para los envíos desde gmail, esta es la configuración:
$smtp->SMTPAuth   = true;
$smtp->SMTPSecure = "tls";
$smtp->Host       = "smtp.gmail.com";
$smtp->Username   = "miCuenta@gmail.com";
$smtp->Password   = "miPassword";
$smtp->Port       = 587;

//Para los envíos desde yahoo, esta es la configuración:
$smtp->SMTPAuth   = true;
$smtp->SMTPSecure = "ssl";
$smtp->Host       = "smtp.mail.yahoo.com";
$smtp->Username   = "miCuenta@yahoo.com";
$smtp->Password   = "miPassword";
$smtp->Port       = 465;


//Codigo PHP
<?php
include("phpmailer.php");
$smtp=new PHPMailer();
$smtp->IsSMTP();
$smtp->CharSet="UTF-8";
$smtp->SMTPAuth = true;	
$smtp->Host = "smtp.gmail.com";	
$smtp->Port       = 587;
$smtp->Username = "cuentaorigen";	
$smtp->Password = "contraseña";	
$smtp->From = "cuentaorigen@gmail.com"; 
$smtp->FromName = "Nombre"; 
$mailTo=array(
"cuenta@hotmail.com"=>"Nombre ",
"cuenta@gmail.com"=>"Nombre "
);
$smtp->WordWrap = 50; 
$contenidoHTML="prueba";


$smtp->Subject="Envio de prueba utilizando un servidor SMTP";


$smtp->MsgHTML($contenidoHTML); 

foreach($mailTo as $mail=>$name) {
$smtp->ClearAllRecipients();
$smtp->AddAddress($mail,$name);
if(!$smtp->Send())
{
echo "<br>Error (".$mail."): ".$smtp->ErrorInfo;
}else{
echo "<br>Envio realizado a ".$name." (".$mail.")";
}
}
?>


//Con funciones
function correo($mensaje,$asunto,$para,$nombre_para){
	$smtp->SMTPAuth= true;
	$smtp->SMTPSecure= "tls";
	$smtp->Host= "smtp.gmail.com";
	$smtp->Port= 587;
	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->SMTPDebug  = 1;  	
    $mail->SetFrom("assistemas.bogota@losolivos.co","Control de contratos");
	$mail->username="assistemas.bogota@losolivos.co";
	$mail->Password   = "Passw0rd2017*";
    $mail->Subject = $asunto;
    $mail->AddAddress($para,$nombre_para);
	$mail->MsgHTML($mensaje);
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	}	
}
