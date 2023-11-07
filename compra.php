<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <?php
        $nome = $_GET["nome2"];
        $cpf = $_GET["cpf2"];
        $produtos = $_REQUEST["produto"];
        $escolha = $_GET["opcao"];
        $valor = 0;
        $pagamento = 0;
        include'MPDF60/mpdf.php';

        if (!empty($produtos)) {
            $qtd = count($produtos);
            for ($i=0; $i <$qtd; $i++) { 
                $valor = $valor + $produtos[$i];
            }
            
        }

        switch (isset($escolha)) {
            case 'pix':
                $pagamento = $valor;
                break;
                
            case '2X':
                $pagamentos = $valor+($valor*1.02);
                break;
            
            case '3X':
                $pagamentos = $valor+($valor*1.05);
                break;
                
        }
        
    ?>
</body>
</html>