<?php

use PHPMailer\PHPMailer\PHPMailer;

function enviarEmail($destinatario, $assunto, $mensagemHTML)
{

    include '../vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 0;

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;

        $mail->Username = 'gustavomaciel1224@gmail.com';
        $mail->Password = 'dkff vhqx cjau pzoy';

        $mail->SMTPSecure = 'tls';

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('gustavomaciel1224@gmail.com', "Gustavo");
        $mail->addAddress($destinatario);

        $mail->Subject = $assunto;
        $mail->Body = $mensagemHTML;

        return $mail->send();
    } catch (Exception $e) {
        return false;
    }
}
