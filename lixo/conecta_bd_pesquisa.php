<?php
  $msg[0] = "Conexão com o banco falhou!";
  $msg[1] = "Não foi possível selecionar o banco de dados!";
  $host = "localhost";
  $usuario = "pesquisa";
  $senha = "pesquisa";

  $conexao = mysqli_connect($host,$usuario,$senha) or die($msg[0]);
  mysqli_select_db($conexao,"proeng") or die($msg[1]);
?>  
