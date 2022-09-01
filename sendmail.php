<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'phpmailer/language/');
  $mail->isHTML(true);

  //От кого письмо
  $mail->setFrom('lead@fastwave.ru', 'Fastwave.ru');
  //Кому отравить
  $mail->addAddress('hello@fastwave.ru');
  //Тема письма
  $mail->Subject = 'Заявка fastwave';

  //Тело письма
  $body = '<h1>Заявка на fastwave.ru</h1>';

  if (trim(!empty($_POST['name']))) {
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
  }

  if (trim(!empty($_POST['phone']))) {
    $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
  }

  if (trim(!empty($_POST['email']))) {
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
  }

  $mail->Body = $body;

  //Отправка
  if (!$mail->send()) {
    $message = 'Error';
  } else {
    $message = 'Form has been sent';
  }

  $response = ['message' => $message];

  header('Content-type: application/json');
  echo json_encode($response)
?>
