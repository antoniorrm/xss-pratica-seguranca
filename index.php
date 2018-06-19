<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  if (!empty($_POST)) {
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo $message;

    include('class/db.php');
    try {
      $db = new Database();
      $db->connect();
      $db->insert('messages',array('email'=> $email, 'message'=> $message)); 
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Meu Portfólio</title>
</head>
<body>
  <h1>Esse é meu portfolio</h1>

  <h2>Deixe uma mensagem</h2>
  <form action="index.php" method="POST">
    Seu email: <input type="text" name="email" /> <br />
    Mensagem:
    <textarea name="message"></textarea>
    <input type="SUBMIT" />
  </form>
</body>
</html>