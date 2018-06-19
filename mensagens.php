<?php
  include('class/db.php');
  $db = new Database();
  $db->connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mensagens</title>
</head>
<body>
<a href="https://www.w3schools.com">Visit W3Schools</a>
<a href="https://www.w3schools.com/html/">Visit Html W3Schools</a>

  <h1>Bem-vindo user!</h1>
  <h3>Suas mensagens:</h3>
  
  <h2>Deixe uma mensagem</h2>
  <form action="index.php" method="POST">
    Mensagem:
    <input type="text" name="message"></input>
    <input type="SUBMIT" />
  </form>
<?php
  $db->select('messages','email,message',NULL,NULL,NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
  $array = $db->getResult();
  
  foreach($array as $value) {
    echo "E-mail: " . ($value['email']) . "<br />";
    echo "Mensagem: " . ($value['message']) . "<br />";
  }
?>
</body>
</html>