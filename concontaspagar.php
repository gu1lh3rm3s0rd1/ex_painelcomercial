<?php include 'conexao.php' ?>

<?php

  //contas a pagar ate 7 dias
  $sql = "
    select replace(format(sum(valor), 2), ',','.') as total_pagar
    from dw.dw_fact_contaspagar
    where data_venc = date_add(curdate(),interval 7 day) and situacao like 'ABERTO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalpagar7 = $total . '' . $dados['total_pagar'] . '';
  }

?>

<?php

  //contas a pagar de 8 ate 15 dias
  $sql = "
    select replace(format(sum(valor), 2), ',','.') as total_pagar
    from dw.dw_fact_contaspagar
    where data_venc between date_add(curdate(),interval 8 day) and date_add(curdate(),interval 15 day) and situacao like 'ABERTO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalpagar15 = $total . '' . $dados['total_pagar'] . '';
  }

?>

<?php

  //contas a pagar de 16 ate 30 dias
  $sql = "
    select replace(format(sum(valor), 2), ',','.') as total_pagar
    from dw.dw_fact_contaspagar
    where data_venc between date_add(curdate(),interval 16 day) and date_add(curdate(),interval 30 day) and situacao like 'ABERTO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalpagar30 = $total . '' . $dados['total_pagar'] . '';
  }

?>

<?php

  //contas a pagar de 31 ate 60 dias
  $sql = "
    select replace(format(sum(valor), 2), ',','.') as total_pagar
    from dw.dw_fact_contaspagar
    where data_venc between date_add(curdate(),interval 31 day) and date_add(curdate(),interval 60 day) and situacao like 'ABERTO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalpagar60 = $total . '' . $dados['total_pagar'] . '';
  }

?>

<?php

  //contas a pagar de 61 ate 90 dias
  $sql = "
    select replace(format(sum(valor), 2), ',','.') as total_pagar
    from dw.dw_fact_contaspagar
    where data_venc between date_add(curdate(),interval 61 day) and date_add(curdate(),interval 90 day) and situacao like 'ABERTO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalpagar90 = $total . '' . $dados['total_pagar'] . '';
  }

?>

<?php

  //contas a pagar acima de 90 dias
  $sql = "
    select replace(format(sum(valor), 2), ',','.') as total_pagar
    from dw.dw_fact_contaspagar
    where data_venc > date_add(curdate(),interval 90 day) and situacao like 'ABERTO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalpagar90mais = $total . '' . $dados['total_pagar'] . '';
  }

?>

<?php

  //total contas a pagar
  $sql = "
    select replace(format(sum(valor), 2), ',','.') as total_pagar
    from dw.dw_fact_contaspagar
    where situacao like 'ABERTO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalpagar = $total . '' . $dados['total_pagar'] . '';
  }

?>
