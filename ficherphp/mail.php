<?php
include_once './../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
 
?>
<?php

$secretKey = "6LcBiDopAAAAAD0ud0umteGP9XXYEkXKTgTO6Ajx";
$recaptchaResponse = $_POST['g-recaptcha-response'];
$apiUrl = "https://www.google.com/recaptcha/api/siteverify";
$data = [
    'secret' => $secretKey,
    'response' => $recaptchaResponse,
];

$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ],
];

$context = stream_context_create($options);
$response = file_get_contents($apiUrl, false, $context);

//$result
 
if(!empty($_POST)) {
 
    $mail = new PHPMailer(true);
 
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'guillaume.jenvrin@sts-sio-caen.info';             //SMTP username
        $mail->Password = 'desolé_monsieur_mais_je_ne_peux_pas_mettre_mon_mot_de_passe_mais_ca_fonctionne_quand_meme';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
        //Recipients
        $mail->setFrom('guillaume.jenvrin@sts-sio-caen.info', 'Mailer');
        $mail->addAddress($_POST['to']??'guillaume.jenvrin@sts-sio-caen.info');     //Add a recipient
 
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST['subject']??'Subject';
        $mail->Body = $_POST['body']??'This is the HTML message body <b>in bold!</b>';
 
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}