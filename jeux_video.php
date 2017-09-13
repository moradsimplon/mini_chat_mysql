<?php

$bdd =  new PDO ('mysql:host=localhost;dbname=tp_openclassroom', 'root', 'zekri59100');
if (isset($_POST['pseudo']) AND isset($_POST['message'])) {

  $pseudo =htmlspecialchars( $_POST['pseudo']);
  $message =htmlspecialchars( $_POST['message']);
  // var_dump($_POST);

$req = $bdd->prepare('INSERT INTO mini_chat(pseudo, message) VALUES(:pseudo, :message)');

$req->execute(array(

    'pseudo' => $pseudo,

    'message' => $message,


    ));

    header('Location: http://localhost/mysql_openclassromm/');

  }
  else {
    echo '<p>'.'remplir les champs'.'<p>';
  }



 ?>
