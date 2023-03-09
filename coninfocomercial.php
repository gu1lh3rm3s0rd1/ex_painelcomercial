<?php include 'conexao.php' ?>

<?php

  //soma de vendas do dia
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido = curdate();
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalVD = $total . '' . $dados['venda'] . '';
  }

?>

<?php

  //soma de vendas ultimos 7 dias
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido between date_sub(curdate(),INTERVAl 7 day) and curdate();
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalV7 = $total . '' . $dados['venda'] . '';
  }

?>

<?php

  //soma de vendas ultimos 30 dias
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido between date_sub(curdate(),INTERVAl 30 day) and curdate();   
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalV30 = $total . '' . $dados['venda'] . '';
  }

?>

<?php

  //soma de vendas no ano
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido between date_sub(curdate(),INTERVAl 365 day) and curdate();  
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalVano = $total . '' . $dados['venda'] . '';
  }

?>

<?php

  //soma de faturamento do dia
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as fat
    from dw.dw_fact_vendas
    where data_faturamento = curdate();
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalFD = $total . '' . $dados['fat'] . '';
  }

?>

<?php

  //soma de faturamento dos ultimos 7 dias
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as fat
    from dw.dw_fact_vendas
    where data_faturamento between date_sub(curdate(),INTERVAl 7 day) AND curdate();
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalF7 = $total . '' . $dados['fat'] . '';
  }

?>

<?php

  //soma de faturamento dos ultimos 30 dias
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as fat
    from dw.dw_fact_vendas
    where data_faturamento between date_sub(curdate(),INTERVAl 30 day) and curdate();
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalF30 = $total . '' . $dados['fat'] . '';
  }

?>

<?php

  //soma de faturamento do ano
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as fat
    from dw.dw_fact_vendas
    where data_faturamento between date_sub(curdate(),INTERVAl 365 day) and curdate();
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalFano = $total . '' . $dados['fat'] . '';
  }

?>

<?php

  //soma de devolucao do dia
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido = curdate() AND situacao like 'CANCELADO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totaldevD = $total . '' . $dados['venda'] . '';
  }

?>

<?php

  //soma de devolucao ultimos 7 dias
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido between date_sub(curdate(),INTERVAl 7 day) and curdate() AND situacao like 'CANCELADO';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totaldev7 = $total . '' . $dados['venda'] . '';
  }

?>

<?php

  //soma de decolucao ultimos 30 dias
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido between date_sub(curdate(),INTERVAl 30 day) and curdate() AND situacao like 'CANCELADO';   
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totaldev30 = $total . '' . $dados['venda'] . '';
  }

?>

<?php

  //soma de devolucao no ano
  $sql = "
    select COALESCE(replace(format(sum(totalvenda), 2), ',', '.'), 0) as venda
    from dw.dw_fact_vendas
    where data_pedido between date_sub(curdate(),INTERVAl 365 day) and curdate() AND situacao like 'CANCELADO';  
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totaldevano = $total . '' . $dados['venda'] . '';
  }

?>