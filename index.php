<?php include 'coninfocomercial.php' ?>
<?php include 'concontaspagar.php' ?>
<?php include 'concontasreceber.php' ?>
<?php include 'conestoquecusto.php' ?>
<?php include 'confinanciamentos.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <div class="imagem"><img src="imagem/LOGO SEM FUNDO.png" alt="Logo"></div> 
        <div class="cards">
            <div class="services">
                <div class="content content-1">
                    <table border="1" border cellpadding="10" cellspacing="0" class="table">
                        <tr>
                            <td class="tbb2">INFORMAÇÕES COMERCIAIS</td>
                            <td class="tb2t2">DIA</td>
                            <td class="tb2t">SEMANA</td>
                            <td class="tb2t2">MÊS</td>
                            <td class="tb2t">ANO</td>
                        </tr>
                        <tr class="tb2">
                            <td class="tb2t2">VENDAS</td>
                            <td><?php echo 'R$ ' . $totalVD; ?></td>
                            <td><?php echo 'R$ ' . $totalV7; ?></td>
                            <td><?php echo 'R$ ' . $totalV30; ?></td>
                            <td><?php echo 'R$ ' . $totalVano; ?></td>
                        </tr>
                        <tr class="tb22">
                            <td class="tb2t">FATURAMENTO</td>
                            <td><?php echo 'R$ ' . $totalFD; ?></td>
                            <td><?php echo 'R$ ' . $totalF7; ?></td>
                            <td><?php echo 'R$ ' . $totalF30 ?></td>
                            <td><?php echo 'R$ ' . $totalFano; ?></td>
                        </tr>
                        <tr class="tb2">
                            <td class="tb2t2">DEVOLUÇÕES</td>
                            <td><?php echo 'R$ ' . $totaldevD; ?></td>
                            <td><?php echo 'R$ ' . $totaldev7; ?></td>
                            <td><?php echo 'R$ ' . $totaldev30; ?></td>
                            <td><?php echo 'R$ ' . $totaldevano; ?></td>
                        </tr>
                    </table>
                    <br>
                    <table border="1" border cellpadding="10" cellspacing="0" class="table">
                        <tr>
                            <td class="tbb2">CONTAS A RECEBER</td>
                            <td class="tb2t2">COB SIMPLES</td>
                            <td class="tb2t">DINHEIRO</td>
                            <td class="tb2t2">MERCADO PAGO</td>
                            <td class="tb2t">CARTÃO</td>
                        </tr>
                        <tr>
                            <td class="tb2t2">ATÉ 7 DIAS</td>
                            <td><?php echo 'R$ ' . $cobrasimples7; ?></td>
                            <td><?php echo 'R$ ' . $dinheiro7; ?></td>
                            <td><?php echo 'R$ ' . $mercadopago7; ?></td>
                            <td><?php echo 'R$ ' . $cartao7; ?></td>
                        </tr>
                        <tr>
                            <td class="tb2t">8 ATÉ 15 DIAS</td>
                            <td><?php echo 'R$ ' . $cobrasimples15; ?></td>
                            <td><?php echo 'R$ ' . $dinheiro15; ?></td>
                            <td><?php echo 'R$ ' . $mercadopago15; ?></td>
                            <td><?php echo 'R$ ' . $cartao15; ?></td>
                        </tr>
                        <tr>
                            <td class="tb2t2">16 ATÉ 30 DIAS</td>
                            <td><?php echo 'R$ ' . $cobrasimples30; ?></td>
                            <td><?php echo 'R$ ' . $dinheiro30; ?></td>
                            <td><?php echo 'R$ ' . $mercadopago30; ?></td>
                            <td><?php echo 'R$ ' . $cartao30; ?></td>
                        </tr>
                        <tr class="tb22">
                            <td class="tb2t">31 ATÉ 60 DIAS</td>
                            <td><?php echo 'R$ ' . $cobrasimples60; ?></td>
                            <td><?php echo 'R$ ' . $dinheiro60; ?></td>
                            <td><?php echo 'R$ ' . $mercadopago60; ?></td>
                            <td><?php echo 'R$ ' . $cartao60; ?></td>
                        </tr>
                        <tr class="tb2">
                            <td class="tb2t2">61 ATÉ 90 DIAS</td>
                            <td><?php echo 'R$ ' . $cobrasimples90; ?></td>
                            <td><?php echo 'R$ ' . $dinheiro90; ?></td>
                            <td><?php echo 'R$ ' . $mercadopago90; ?></td>
                            <td><?php echo 'R$ ' . $cartao90; ?></td>
                        </tr>
                        <tr class="tb22">
                            <td class="tb2t">ACIMA DE 90 DIAS</td>
                            <td><?php echo 'R$ ' . $cobrasimples90mais; ?></td>
                            <td><?php echo 'R$ ' . $dinheiro90mais; ?></td>
                            <td><?php echo 'R$ ' . $mercadopago90mais; ?></td>
                            <td><?php echo 'R$ ' . $cartao90mais; ?></td>
                        </tr>
                        <tr class="tb2">
                            <td class="tb2t2">TOTAL</td>
                            <td><?php echo 'R$ ' . $totalcobrsimples; ?></td>
                            <td><?php echo 'R$ ' . $totaldinheiro; ?></td>
                            <td><?php echo 'R$ ' . $totalmercadopago; ?></td>
                            <td><?php echo 'R$ ' . $totalcartao; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="content content-2">
                    <table border="1" border cellpadding="10" cellspacing="0" class="table">
                        <tr>
                            <td class="tbb2">FINANCIAMENTOS</td>
                            <td class="tb2t">PARCELA/MÊS</td>
                            <td class="tb2t2">SALDO DEVEDOR</td>
                        </tr>
                        <tr>
                            <td class="tb2t2">TECHTO</td>
                            <td><?php echo 'R$ ' . $techtoparcela; ?></td>
                            <td><?php echo 'R$ ' . $techtosaldo; ?></td>
                        </tr>
                        <tr>
                            <td class="tb2t2">DESENVOLVE SP</td>
                            <td><?php echo 'R$ ' . $desenvolvespparcela; ?></td>
                            <td><?php echo 'R$ ' . $desenvolvespsaldo; ?></td>
                        </tr>
                        <tr>
                            <td class="tb2t">CREDFIRME</td>
                            <td><?php echo 'R$ ' . $credfirmeparcela; ?></td>
                            <td><?php echo 'R$ ' . $credfirmesaldo; ?></td>
                        </tr>
                    </table>
                    <br>
                    <table border="1" border cellpadding="10" cellspacing="0" class="table">
                            <tr>
                                <td colspan="2" class="tbb2">CONTAS A PAGAR/FORNECEDORES</td>
                            </tr>
                            <tr>
                                <td class="tb2t">ATÉ 7 DIAS</td>
                                <td><?php echo 'R$ ' . $totalpagar7; ?></td>
                            </tr>
                            <tr>
                                <td class="tb2t2">8 ATÉ 15 DIAS</td>
                                <td><?php echo 'R$ ' . $totalpagar15; ?></td>
                            </tr>
                            <tr>
                                <td class="tb2t">16 ATÉ 30 DIAS</td>
                                <td><?php echo 'R$ ' . $totalpagar30; ?></td>
                            </tr>
                            <tr>
                                <td class="tb2t2">31 ATÉ 60 DIAS</td>
                                <td><?php echo 'R$ ' . $totalpagar60; ?></td>
                            </tr>
                            <tr>
                                <td class="tb2t">61 ATÉ 90 DIAS</td>
                                <td><?php echo 'R$ ' . $totalpagar90; ?></td>
                            </tr>
                            <tr>
                                <td class="tb2t2">ACIMA DE 90 DIAS</td>
                                <td><?php echo 'R$ ' . $totalpagar90mais; ?></td>
                            </tr>
                            <tr>
                                <td class="tb2t">TOTAL</td>
                                <td><?php echo 'R$ ' . $totalpagar; ?></td>
                            </tr>
                    </table>
                </div>
            </div>
            <div class="services">
                <div class="estoques">
                        <table border="1" border cellpadding="10" cellspacing="0" class="table">
                                <tr>
                                    <td class="tbb2">ESTOQUE/CUSTO</td>
                                    <td><?php echo 'R$ ' . $totalcusto ?></td>
                                </tr>
                        </table>
                </div>
            </div>
        </div>
        <footer class="foot"></footer>
    </main>
</body>
</html>