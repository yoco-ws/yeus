<?php

require_once('phpMailer/class.phpmailer.php');
require_once('phpMailer/class.smtp.php');

function sendContactMail($data, $correo){
	// texto arriba 15px abajo 10px
	
	$url_site = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER["HTTP_HOST"];
	$path = $_SERVER['SERVER_NAME'];
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = "base64";
	
	$mail->From = "correos@drayeus.com";
	$mail->FromName = "Dr. Yeus";
	$mail->isHTML(true);

	//temporal
	/*$mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';  //mailtrap SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = '8270bb35ef0296';   //username
    $mail->Password = '160ce573aef9ed';   //password
    $mail->Port = 2525;                 //smtp port  */
	//temporal

	$mail->isSMTP();
	$mail->Host = 'mail.drayeus.com';  //mailtrap SMTP server
	$mail->isHTML(true);
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Username = 'correos@drayeus.com';   //username
	$mail->Password = 'P3sOV0eaUVHO';   //password
	$mail->Port = 465;


	$mail->addAddress($data['email'], $data['name']);
	$mail->addBCC("soporte@yoco.ws");
	$mail->addBCC("drayeusviflores@gmail.com");
    
	$mail->Subject = "Contacto - Yeus";
	$headers =  'From: correos@drayeus.com'."\r\n" .
		    	'Reply-To: '. $correo . 
		    	'X-Mailer: PHP/' . phpversion();
	$message = "<html>
				<body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0'>
					<center>
						<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' style='background:#fff;'>
							<tr>
								<td align='center' valign='top'>
									<br>
									<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer' style='background:#fff; font-family:helvetica; font-size:12px;'>
										<tr>
											<td align='center' valign='top'>
								

												<table border='0' cellpadding='0' cellspacing='0' width='600' id='backgroundCentral'>
													<tr>
														<td class='headerContent'>
															<div style='width:100%; margin: 0 auto; padding-top:20px; text-align:center;'>
																<a href='https://drayeusviflores.com/'>
																	<img src='https://drayeusviflores.com/img/mail-header.jpg' alt='Yeus'>
																</a>	
													
															</div>
														</td>
													</tr>
													<tr>
														<td valign='top'>
															<div style='padding:10px;color: #255A7B;'>
																
																<div style='text-align:left; font-size:15px;'>
																	
																	".$data['name']." ".$data['email']."

																	<br>
																	Gracias por ponerse en contacto conmigo, en breve me comunicaré para agendar la cita que desea o aclarar sus inquietudes. 

																	<br><br>

																	<strong> Dra. Yeus Flores </strong>
																</div>

																

															</div>
														</td>
													</tr>
										
												</table>
								
											</td>
										</tr>
							
									</table>
									<br />
								</td>
							</tr>
						</table>
					</center>
				</body>
			</html>";
	$mail->Body = $message;
	$mail->AltBody = $headers."\n\n".$message;
	if(!$mail->Send()) {
		error_log($mail->ErrorInfo);
		return false;
	} else {
		return true;
	}
}


?>