<?php
  if (empty($_POST['name']) ||
    empty($_POST['telephone']) ||
    empty($_POST['email'])
  ) {
    echo 'Form error: ';
    die();
  }

  use PHPMailer\PHPMailer\PHPMailer;
  require 'vendor/autoload.php';

  // Change here
  $smtp_server = 'smtp.hostinger.com';
  $imap_server = 'imap.hostinger.com';
  $email_account = 'example@hostinger.com';
  $password = 'PASSWORD';

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;

  $mail->Host = $smtp_server;
  $mail->Port = 587;
  $mail->SMTPAuth = true;

  $mail->Username = $email_account;
  $mail->Password = $password;

  // Change here
  $mail->setFrom('example@email.com', 'Your Name');
  $mail->addReplyTo('example@email.com', 'Replyer Name');
  $mail->addAddress('example@email.com', 'Receiver Name');

  $mail->Subject = "Contato {$_POST['name']} via site xxxxx.com.br";
  $mail->Body = <<<EOM
  Nome Completo: {$_POST['name']}
  Telefone com DDD: {$_POST['telephone']}
  E-mail: {$_POST['email']}
  EOM;

  $success = $mail->send();

  if (!$success) {
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    // echo 'The email message was sent.';

    // Add the message to the IMAP.Sent mailbox
    $mail_string = $mail->getSentMIMEMessage();

    $imap_stream = imap_open("{" . $imap_server . "}", $email_account, $password);
    imap_append($imap_stream, "{" . $imap_server . "}" . "INBOX.Sent", $mail_string);

    imap_close($imap_stream);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $success ? 'Enviado' : 'Error' ?></title>
  <link rel="icon" type="image/x-icon" href="./assets/img/k2/k2.png">

  <meta name="robots" content="noindex">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <h1 class="fs-4 my-3">
      <?= $success ? 'Formulário foi enviado com sucesso!' : 'Error: ' ?>
    </h1>
    <form action="." method="post">
      <input type="hidden" name="mvform" value="true">
      <button type="submit" class="btn btn-outline-primary px-4 py-1">
        Voltar
      </button>
    </form>
  </div>
</body>
</html>
