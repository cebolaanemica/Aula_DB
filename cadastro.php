<?php
    $nome = $_POST['nome'];
    $email  = $_POST['email'];
    $datanasc = $_POST['data'];
    $sql = "insert into pessoa(nome, email, datanasc) value ('$nome', '$email','datanasc' )";

  include_once('config.php');
  mysqli_query($conexao, $sql);


?>