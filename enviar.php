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

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "mail.masporti-peru.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "contacto@masporti-peru.com";  // Mi cuenta de correo
$smtpClave = "prueba";  // Mi contraseña




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


$mail->From = $otro; // Email desde donde envío el correo.
$mail->FromName = "Masporti-peru";
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario
$mail->addAddress($email);
$mail->addAddress($johan);

$mail->Subject = "Orientacion y consejeria"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html>

<body>
    <div>
		<table style='border-collapse: collapse; border: none; max-width: 700px; margin: 0 auto; width: 100%;'>
			<tbody>
				<tr>
					<td style='padding: 0;'>
						<div style='background: url(https://johandurand.com/web-kera/images/mail.jpg) no-repeat;'>
							<table style='border-collapse: collapse; border: none; padding-top: 400px; display: block; width: 100%;'>
								<tbody style='width: 100%;'>
									<tr style='width: 100%;'>
										<td style='width: 100%; text-align: center; font-size: 20px;'>
											<p style='color: #00B900; font-family: nunito, Arial, Helvetica; margin:0;'>Hola!</p>
										</td>
									</tr>
									<tr style='width: 100%;'>
										<td style='width: 100%; text-align: center; padding-top: 40px;'>
											<b style='color: #fff; font-family: nunito, Arial, Helvetica; font-weight: 700; font-size: 25px;'>!Gracias por Inscribirte en GDT¡</b>
										</td>
									</tr>
									<tr>
										<td>
											<p style='padding: 20px 50px; color: #fff; font-family: nunito, Arial, Helvetica; margin: 0;'>Sus datos fueron enviados correctamente, uno de nuestros asesores se pondrá en contacto con usted en los próximos días.</p>
										</td>
									</tr>
									<tr>
										<td>
											<table style='width: 100%; padding: 50px; display: block; border-collapse: collapse; border: none; color: #fff; font-family: nunito, Arial, Helvetica;'>
												<tbody>
													<tr>
														<td style='width: 40%;'>
															<p style='color: #00B900; margin: 0; font-family: nunito, Arial, Helvetica;'>DATOS:</p>
														</td>
														<td></td>
													</tr>
													<tr>
														<td style='font-weight: 300; font-family: nunito, Arial, Helvetica;'>Nombre</td>
														<td style='font-family: nunito, Arial, Helvetica;'>: {$nombre}</td>
													</tr>
													<tr>
														<td style='font-weight: 300; font-family: nunito, Arial, Helvetica;'>Correo</td>
														<td style='font-family: nunito, Arial, Helvetica; color: #fff;'>: <a style='color: #fff; text-decoration: none;' href='mailto:gestiondeltalento@gdt.com.pe' target='_blank'>{$email}</a></td>
													</tr>
													<tr>
														<td style='font-weight: 300; font-family: nunito, Arial, Helvetica;'>Teléfono</td>
														<td style='font-family: nunito, Arial, Helvetica;'>: {$telefono}</td>
													</tr>
													<tr>
														<td style='vertical-align: top; font-family: nunito, Arial, Helvetica;'>Área laboral</td>
														<td style='font-family: nunito, Arial, Helvetica;'>: {$mensaje}</td>
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
						<div style='background: #001232; padding: 0 50px;'>
							<table style='border-collapse: collapse; border: none; width: 100%;'>
								<tbody>
									<tr style='border-top: 1px solid rgba(255,255,255,0.4); border-bottom: 1px solid rgba(255,255,255,0.4); padding: 30px; display: block;'>
										<td>
											<img src='https://www.gdt.com.pe/logo-gdt-mail.png' alt='logo'>
										</td>
										<td style='width: 100%'>
											<table style='margin-left: auto;'>
												<tbody>
													<tr>
														<td>
															<a style='width: 30px; height: 30px; border: solid 1px #00B900; border-radius: 50%; display: block; text-align: center; margin-right: 15px;' href='https://www.facebook.com/gestiondeltalento.gdt/'><img style='margin: 7px;' src='https://www.gdt.com.pe/face.png' alt=''></a>
														</td>
														<td>
															<a style='width: 30px; height: 30px; border: solid 1px #00B900; border-radius: 50%; display: block; text-align: center; margin-right: 15px;' href='https://www.instagram.com/gdt_peru/'><img style='margin: 7px;' src='https://www.gdt.com.pe/instagram.png' alt=''></a>
														</td>
														<td>
															<a style='width: 30px; height: 30px; border: solid 1px #00B900; border-radius: 50%; display: block; text-align: center;' href='https://www.linkedin.com/company/gdt-gesti-n-del-talento/'><img style='margin: 7px;' src='https://www.gdt.com.pe/linkedin.png' alt=''></a>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td style='color: #fff; font-family: nunito, Arial, Helvetica; padding: 40px 0; text-align: center; font-size: 13px; opacity: 0.5'>
											<p style='margin: 0; '>T: 714-9461 / 949 208 351</p>
											<p style='margin: 0; '>E: <a style='color: #fff; text-decoration: none;' href='mailto:gestiondeltalento@gdt.com.pe' target='_blank'>gestiondeltalento@gdt.com.pe</a></p>
											<p style='margin: 0; '>Calle Arica 530, 2 Piso, Miraflores.</p>
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
    header("Location:https://www.johandurand.com/web-kera/index.php");
    // echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
} 

?>

