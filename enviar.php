<?php


require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["mensaje"]) || !isset($_POST["telefono"])  ) {
    die ("Es necesario completar todos los datos del formulario");
}

$nombre = $_POST["nombre"];

$email = $_POST["email"];

$telefono = $_POST["telefono"];

$mensaje = $_POST["mensaje"];


$destinatario = "contacto@johandurand.com";
$otro = "contacto@johandurand.com";
$johan = "hola@johandurand.com";

// Datos de la cuenta de correo utilizada para enviar v�a SMTP
$smtpHost = "mail.keraessence.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "contacto@keraessence.com";  // Mi cuenta de correo
$smtpClave = "kerasilk";  // Mi contrase�a




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $otro; // Email desde donde env�o el correo.
$mail->FromName = "keraessence";
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario
$mail->addAddress($email);
$mail->addAddress($johan);

$mail->Subject = "Datos de contacto enviado"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html>

<body>
    <div>
		<table style='border-collapse: collapse; border: none; max-width: 700px; margin: 0 auto; width: 100%; background: #000;'>
			<tbody>
				<tr>
					<td style='padding: 0;'>
						<div style='background: url(http://keraessence.com/images/correo.jpg) no-repeat;'>
							<table style='border-collapse: collapse; border: none; padding-top: 380px; display: block; width: 100%;'>
								<tbody style='width: 100%;'>
									<tr style='width: 100%;'>
										<td style='width: 100%; text-align: center; font-size: 20px;'>
											<p style='color: #D49D00; font-family: nunito sans, Arial, Helvetica; margin:0; text-transform: uppercase; font-weight: 800; font-size: 25px;'>hola {$nombre}</p>
										</td>
									</tr>
									<tr style='width: 100%;'>
										<td style='width: 100%; text-align: center; padding-top: 40px;'>
											<b style='color: #fff !important; font-family: nunito sans, Arial, Helvetica; font-weight: 300; font-size: 28px; text-transform: uppercase;'>�gracias por inscribirte <br>en keraess�nce!</b>
										</td>
									</tr>
									<tr>
										<td>
											<p style='padding: 20px 50px; color: #fff !important; font-family: nunito sans, Arial, Helvetica; margin: 0;'>Sus datos fueron enviados correctamente, uno de nuestros especialistas se pondr� en contacto con usted a la brevedad posible.</p>
										</td>
									</tr>
									<tr>
										<td>
											<table style='width: 100%; padding: 50px; display: block; border-collapse: collapse; border: none; color: #fff !important; font-family: nunito sans, Arial, Helvetica;'>
												<tbody>
													<tr>
														<td style='width: 60%;'>
															<p style='color: #D49D00; margin: 0; font-family: nunito sans, Arial, Helvetica;'>DATOS:</p>
														</td>
														<td></td>
													</tr>
													<tr>
														<td style='font-weight: 300; font-family: nunito sans, Arial, Helvetica; color: #fff !important;'>Nombre</td>
														<td style='font-family: nunito sans, Arial, Helvetica; color: #fff !important;'>: {$nombre}</td>
													</tr>
													<tr>
														<td style='font-weight: 300; font-family: nunito sans, Arial, Helvetica; color: #fff !important;'>Correo</td>
														<td style='font-family: nunito sans, Arial, Helvetica; color: #fff !important;'>: <a style='color: #fff !important; text-decoration: none;' href='mailto:gestiondeltalento@gdt.com.pe' target='_blank'>{$email}</a></td>
													</tr>
													<tr>
														<td style='font-weight: 300; font-family: nunito sans, Arial, Helvetica; color: #fff !important;'>Tel�fono</td>
														<td style='font-family: nunito sans, Arial, Helvetica; color: #fff !important;'>: {$telefono}</td>
													</tr>
													<tr>
														<td style='font-weight: 300; vertical-align: top; font-family: nunito sans, Arial, Helvetica; color: #fff !important;'>�rea laboral</td>
														<td style='font-family: nunito sans, Arial, Helvetica; color: #fff !important !important;'>: {$mensaje}</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
				<tr>
					<td style='padding: 0;'>
						<div style='background: #020202 !important; padding: 0 50px;'>
							<table style='border-collapse: collapse; border: none; width: 100%;'>
								<tbody>
									<tr>
										<td style='color: #fff !important; font-family: nunito sans, Arial, Helvetica; padding: 40px 0; text-align: center; font-size: 13px; opacity: 0.5'>
											<p style='margin: 0; '>T: 987654321 <br>E: keraessence@gmail.com <br>Intisuyo 165 Urb Maranga San Miguel</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>

<br />"; // Texto del email en formato HTML
// $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    header("Location:http://www.keraessence.com");
    // echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurri� un error inesperado.";
} 

?>

