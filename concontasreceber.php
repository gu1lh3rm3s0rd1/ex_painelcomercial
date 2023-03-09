<?php include 'conexao.php' ?>

<?php

  //receber em ate 7 dias COBR SIMPLES
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 7 day) AND descr_pgmnt LIKE 'COBR SIMPLES%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cobrasimples7 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber em ate 7 dias CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 7 day) AND descr_pgmnt LIKE 'CARTAO%'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cartao7 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber em ate 7 dias MERCADO PAGO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 7 day) AND descr_pgmnt LIKE 'MERCADO PAGO'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $mercadopago7 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber em ate 7 dias DINHEIRO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 7 day) AND descr_pgmnt like 'DINHEIRO'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $dinheiro7 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 8 ate 15 dias COBR SIMPLES
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 8 day) and date_add(curdate(), interval 15 day) AND descr_pgmnt like 'COBR SIMPLES%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cobrasimples15 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 8 ate 15 dias CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 8 day) and date_add(curdate(), interval 15 day) AND descr_pgmnt like 'CARTAO%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cartao15 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 8 ate 15 dias MERCADO PAGO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 8 day) and date_add(curdate(), interval 15 day) AND descr_pgmnt like 'MERCADO PAGO'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $mercadopago15 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 8 ate 15 dias DINHEIRO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 8 day) and date_add(curdate(), interval 15 day) AND descr_pgmnt like 'DINHEIRO'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $dinheiro15 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 16 ate 30 dias COBR SIMPLES
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 16 day) and date_add(curdate(), interval 30 day) AND descr_pgmnt like 'COBR SIMPLES%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cobrasimples30 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 16 ate 30 dias CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 16 day) and date_add(curdate(), interval 30 day) AND descr_pgmnt like 'CARTAO%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cartao30 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 16 ate 30 dias CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 16 day) and date_add(curdate(), interval 30 day) AND descr_pgmnt like 'CARTAO%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cartao30 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 16 ate 30 dias MERCADO PAGO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 16 day) and date_add(curdate(), interval 30 day) AND descr_pgmnt like 'MERCADO PAGO'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $mercadopago30 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 16 ate 30 dias DINHEIRO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 16 day) and date_add(curdate(), interval 30 day) AND descr_pgmnt like 'DINHEIRO'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $dinheiro30 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 31 ate 60 dias COBR SIMPLES
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 31 day) and date_add(curdate(), interval 60 day) AND descr_pgmnt like 'COBR SIMPLES%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cobrasimples60 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 31 ate 60 dias CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 31 day) and date_add(curdate(), interval 60 day) AND descr_pgmnt like 'CARTAO%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cartao60 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 31 ate 60 dias MERCADO PAGO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 31 day) and date_add(curdate(), interval 60 day) AND descr_pgmnt like 'MERCADO PAGO'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $mercadopago60 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 31 ate 60 dias DINHEIRO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 31 day) and date_add(curdate(), interval 60 day) AND descr_pgmnt like 'DINHEIRO'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $dinheiro60 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 61 ate 90 dias COBR SIMPLES
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 61 day) and date_add(curdate(), interval 90 day) AND descr_pgmnt like 'COBR SIMPLES%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cobrasimples90 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 61 ate 90 dias CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 61 day) and date_add(curdate(), interval 90 day) AND descr_pgmnt like 'CARTAO%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cartao90 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 61 ate 90 dias MERCADO PAGO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 61 day) and date_add(curdate(), interval 90 day) AND descr_pgmnt like 'MERCADO PAGO'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $mercadopago90 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber de 61 ate 90 dias DINHEIRO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between date_add(curdate(), interval 61 day) and date_add(curdate(), interval 90 day) AND descr_pgmnt like 'DINHEIRO'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $dinheiro90 = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber acima 90 dias COBR SIMPLES
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc >= date_add(curdate(),interval 90 day) AND descr_pgmnt like 'COBR SIMPLES%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cobrasimples90mais = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber acima 90 dias CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc >= date_add(curdate(),interval 90 day) AND descr_pgmnt like 'CARTAO%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $cartao90mais = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber acima 90 dias MERCADO PAGO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc >= date_add(curdate(),interval 90 day) AND descr_pgmnt like 'MERCADO PAGO'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $mercadopago90mais = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //receber acima 90 dias DINHEIRO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc >= date_add(curdate(),interval 90 day) AND descr_pgmnt like 'DINHEIRO'
    ) as x; 
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $dinheiro90mais = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //total a receber COBRANCA SIMPLES
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 90 day) and descr_pgmnt like 'COBR SIMPLES%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalcobrsimples = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //total a receber DINHEIRO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 90 day) and descr_pgmnt like 'DINHEIRO'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totaldinheiro = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //total a receber MERCADO PAGO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 90 day) and descr_pgmnt like 'MERCADO PAGO'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalmercadopago = $total . '' . $dados['total_receber'] . '';
  }

?>

<?php

  //total a receber CARTAO
  $sql = "
    select coalesce(replace(format(sum(x.total-x.desconto), 2), ',','.'), 0) as total_receber
    from
    (
      select sum(valor) as total, coalesce(sum(desconto), 0) as desconto
      from dw.dw_fact_contasreceber
      where data_venc between curdate() and date_add(curdate(), interval 90 day) and descr_pgmnt like 'CARTAO%'
    ) as x;
  "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalcartao = $total . '' . $dados['total_receber'] . '';
  }

?>