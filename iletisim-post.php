

<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



if ( $_POST ) 
{
	$adi_soyadi = $_POST['adsoyad'];    
	$telefon    = $_POST['konu'];    
	$email      = $_POST['mail'];    
	$mesaj      = $_POST['mesaj'];    


	$mail_icerik = "Merhaba, sitenizden yeni bir iletişim formu gönderildi. Bilgileri aşağıdadır. <br> ";
	$mail_icerik .= "Adı Soyadı: $adi_soyadi<br>";
	$mail_icerik .= "Telefon: $telefon<br>";
	$mail_icerik .= "Email: $email<br>";
	$mail_icerik .= "Mesaj: $mesaj<br>";


	require 'phpMailer/src/Exception.php';
	require 'phpMailer/src/PHPMailer.php';
	require 'phpMailer/src/SMTP.php';



	$mail = new PHPMailer(true);

	try {

	    $mail->IsSMTP();                                          // Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'tugbagurbuz2002@gmail.com';                     // SMTP username
		$mail->Password   = 'kvmpqluzjpmnnqdq';                        // SMTP password
		                        
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		//Recipients
		$mail->setFrom('from@example.com', 'iletisim - formu');
		$mail->addAddress('tugbagurbuz2002@gmail.com', 'Tuba GURBUZ');     



		$mail->isHTML(true);  
		$mail->CharSet = 'UTF-8';                 
		$mail->Subject = 'Sitenizden iletisim formu gönderildi.';
		$mail->Body    = $mail_icerik;
		$mail->AltBody = $mail_icerik;

		$mail->send();
		echo 'mesaj başarıyla gönderildi';
	} 
	
	
	
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}

?>
