<?php include 'conexao.php' ?>

<?php

  //soma de estoque/precocusto
  $sql = "
    select coalesce(replace(format(sum(total_estoque*preco_custo), 2), ',','.'), 0) as totalestoque
    from dw.dw_produtos
    where deposito like 'GERAL';
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $totalcusto = $total . '' . $dados['totalestoque'] . '';
  }

?>