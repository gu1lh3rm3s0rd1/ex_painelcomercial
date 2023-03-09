<?php
#conexao com o banco de dados MySql

  $user = "root";
  $password = "123456";
  $database = "dw";
  $hostname = "192.168.1.159";

  # Conecta com o servidor de banco de dados
  $conexao = mysqli_connect( $hostname, $user, $password, $database ) or die( ' Erro na conexão ' );

?>