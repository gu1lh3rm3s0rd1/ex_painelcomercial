<?php include 'conexao.php' ?>

<?php

  //CREDFIRME PARCELA
  $sql = "
    SELECT UPPER(c.documento) AS documento, f.nome AS fornecedor, coalesce(REPLACE(FORMAT(c.valor, 2), ',', '.'), 0) AS valor, c.valor_pago AS valor_pago,
    c.situacao AS status, c.historico AS historico, c.data_venc AS data_vencimento
    FROM stage.contas_pagar AS c
    INNER JOIN stage.contatos AS f
    ON c.fornecedor_codigo = f.id_1
    WHERE c.situacao LIKE 'aberto' AND f.nome LIKE 'CREDFIRME%'
    ORDER BY c.documento;
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $credfirmeparcela = $total . '' . $dados['valor'] . '';
  }

?>

<?php

  //CREDFIRME SALDO DEVEDOR
  $sql = "
    SELECT z.fornecedor AS fornecedor, z.total_doc AS total_doc, z.total_pago AS total_pago, coalesce(z.saldo_devedor, 0) as saldo_devedor
    FROM
    (
    SELECT UPPER(y.fornecedor) AS fornecedor, y.valor_total_doc AS total_doc, y.valor_pago AS total_pago,
          REPLACE(FORMAT(SUM(y.valor_total_doc-y.valor_pago), 2), ',', '.') AS saldo_devedor
    FROM
    (
    SELECT x.fornecedor AS fornecedor, SUM(x.valor) AS valor_total_doc, SUM(x.valor_pago) AS valor_pago
    FROM
    (
    SELECT c.documento AS documento, f.nome AS fornecedor, c.valor AS valor, c.valor_pago AS valor_pago,
          c.situacao AS status, c.historico AS historico, c.data_venc AS data_vencimento
    FROM stage.contas_pagar AS c
    INNER JOIN stage.contatos AS f
    ON c.fornecedor_codigo = f.id_1
    ORDER BY c.documento
    ) AS x
    GROUP BY x.fornecedor
    ) AS y
    GROUP BY y.fornecedor
    ORDER BY y.fornecedor
    ) AS z
    WHERE z.fornecedor LIKE 'CREDFIRME%'
    ORDER BY z.fornecedor;
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $credfirmesaldo = $total . '' . $dados['saldo_devedor'] . '';
  }

?>

<?php

  //DESENVOLVE SP
  $sql = "
      SELECT UPPER(c.documento) AS documento, f.nome AS fornecedor, coalesce(REPLACE(FORMAT(c.valor, 2), ',', '.'), 0) AS valor, c.valor_pago AS valor_pago,
      c.situacao AS status, c.historico AS historico, c.data_venc AS data_vencimento
      FROM stage.contas_pagar AS c
      INNER JOIN stage.contatos AS f
      ON c.fornecedor_codigo = f.id_1
      WHERE c.situacao LIKE 'aberto' AND f.nome LIKE 'DESENVOLVE%'
      ORDER BY c.documento
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $desenvolvespparcela = $total . '' . $dados['valor'] . '';
  }

?>

<?php

  //DESENVOLVE SP SALDO DEVEDOR
  $sql = "
    SELECT z.fornecedor AS fornecedor, z.total_doc AS total_doc, z.total_pago AS total_pago, coalesce(z.saldo_devedor, 0) as saldo_devedor
    FROM
    (
    SELECT UPPER(y.fornecedor) AS fornecedor, y.valor_total_doc AS total_doc, y.valor_pago AS total_pago,
          REPLACE(FORMAT(SUM(y.valor_total_doc-y.valor_pago), 2), ',', '.') AS saldo_devedor
    FROM
    (
    SELECT x.fornecedor AS fornecedor, SUM(x.valor) AS valor_total_doc, SUM(x.valor_pago) AS valor_pago
    FROM
    (
    SELECT c.documento AS documento, f.nome AS fornecedor, c.valor AS valor, c.valor_pago AS valor_pago,
          c.situacao AS status, c.historico AS historico, c.data_venc AS data_vencimento
    FROM stage.contas_pagar AS c
    INNER JOIN stage.contatos AS f
    ON c.fornecedor_codigo = f.id_1
    ORDER BY c.documento
    ) AS x
    GROUP BY x.fornecedor
    ) AS y
    GROUP BY y.fornecedor
    ORDER BY y.fornecedor
    ) AS z
    WHERE z.fornecedor LIKE 'DESENVOLVE SP%'
    ORDER BY z.fornecedor;
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $desenvolvespsaldo = $total . '' . $dados['saldo_devedor'] . '';
  }

?>

<?php

  //TECHTO PARCELA
  $sql = "
      SELECT UPPER(c.documento) AS documento, f.nome AS fornecedor, coalesce(REPLACE(FORMAT(c.valor, 2), ',', '.'), 0) AS valor, c.valor_pago AS valor_pago,
      c.situacao AS status, c.historico AS historico, c.data_venc AS data_vencimento
      FROM stage.contas_pagar AS c
      INNER JOIN stage.contatos AS f
      ON c.fornecedor_codigo = f.id_1
      WHERE c.situacao LIKE 'aberto' AND f.nome LIKE 'TECHTO%'
      ORDER BY c.documento
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $techtoparcela = $total . '' . $dados['valor'] . '';
  }

?>

<?php

  //TECHTO SALDO DEVEDOR
  $sql = "
    SELECT z.fornecedor AS fornecedor, z.total_doc AS total_doc, z.total_pago AS total_pago, coalesce(z.saldo_devedor, 0) as saldo_devedor
    FROM
    (
    SELECT UPPER(y.fornecedor) AS fornecedor, y.valor_total_doc AS total_doc, y.valor_pago AS total_pago,
          REPLACE(FORMAT(SUM(y.valor_total_doc-y.valor_pago), 2), ',', '.') AS saldo_devedor
    FROM
    (
    SELECT x.fornecedor AS fornecedor, SUM(x.valor) AS valor_total_doc, SUM(x.valor_pago) AS valor_pago
    FROM
    (
    SELECT c.documento AS documento, f.nome AS fornecedor, c.valor AS valor, c.valor_pago AS valor_pago,
          c.situacao AS status, c.historico AS historico, c.data_venc AS data_vencimento
    FROM stage.contas_pagar AS c
    INNER JOIN stage.contatos AS f
    ON c.fornecedor_codigo = f.id_1
    ORDER BY c.documento
    ) AS x
    GROUP BY x.fornecedor
    ) AS y
    GROUP BY y.fornecedor
    ORDER BY y.fornecedor
    ) AS z
    WHERE z.fornecedor LIKE 'TECHTO%'
    ORDER BY z.fornecedor;
    "; 

  $consulta = mysqli_query( $conexao, $sql ) or die(' Erro na query:'); 

  //prapara array
  $total = '';

  //consulta os registros da tabela 
  while ($dados = mysqli_fetch_array( $consulta )) { 
    $techtosaldo = $total . '' . $dados['saldo_devedor'] . '';
  }

?>