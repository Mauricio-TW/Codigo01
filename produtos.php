<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        img{
            width: 70px;
            height: 70px;
        }
        #frase01{
            text-align: center;
            color: #0000ff;
            font-size: 30px;
        }
        #img01{
            width: 200px;
            height: 100px;
        }
    </style>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $email = $_GET["email"];
        $senha = $_GET["senha"];
        $confirma_senha = $_GET["confirma_senha"];

        if ($senha != $confirma_senha) {
            header("Location:cadastro.php");
        }
    ?>
    
    
    <form method="get" action="compra.php">
        
        <input type="hidden" name="nome2" value="<?php $nome = $_GET['nome'];echo $nome;?>">
        <input type="hidden" name="cpf2" value="<?php $nome = $_GET['cpf'];echo $cpf;?>">
        
        <table>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="produto[]" value="9.99"></td>
                    <td><label>Doritos Wasabi 78g</label></td>
                    <td><img src="https://images-americanas.b2w.io/produtos/01/00/img/2638457/4/2638457405_1GG.jpg" alt="doritos_wasabi"></td>
                    <td><label>9,99 R$</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="produto[]" value="10.99"></td>
                    <td><label>Doritos Pizza 144g</label></td>
                    <td><img src="https://carrefourbrfood.vtexassets.com/arquivos/ids/78505950/salg-doritos-rock-in-rio-pizza-140g-1.jpg?v=638005034105100000" alt="doritos_pizza"></td>
                    <td><label>10,99 R$</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="produto[]" value="14.00"></td>
                    <td><label>Doritos Sweet Chili 48g</label></td>
                    <td><img src="https://mercantilnovaera.vtexassets.com/arquivos/ids/206653/Salgadinho-Doritos-Sweet-Chili-Embalagem-45g.jpg?v=638187419892970000" alt="doritos_sweetChili"></td>
                    <td><label>14,00 R$</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="produto[]" value="13.00"></td>
                    <td><label>Doritos Flamin Hot 84g</label></td>
                    <td><img src="https://http2.mlstatic.com/D_NQ_NP_947055-MLB45424999565_042021-O.webp" alt="doritos_flaminHot"></td>
                    <td><label>13,00 R$</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="produto[]" value="15.50"></td>
                    <td><label>Doritos Dinamita Chipotle 84g</label></td>
                    <td><img src="https://images-americanas.b2w.io/produtos/01/00/img/4341716/9/4341716998_1GG.jpg" alt="doritos_dinamitaChipotle"></td>
                    <td><label>15,50 R$</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="produto[]" value="12.00"></td>
                    <td><label>Doritos Cool Ranch 84g</label></td>
                    <td><img src="https://carrefourbrfood.vtexassets.com/arquivos/ids/98074640/salgadinho-doritos-sabor-cool-ranch-84g-4.jpg?v=638103576214000000" alt="doritos_coolRanch"></td>
                    <td><label>12,00 R$</label></td>
                </tr>
            </tbody>
        </table>
        <p id="frase01">Formas de Pagamento</p>
        <table align = "center">
            <tbody>
                <tr>
                    <td><input type="radio" name="opcao" value="pix"></td>
                    <td><label>À vista com PIX</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" value="2X"></td>
                    <td><label>2X a prazo no Cartão</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="opcao" value="3X"></td>
                    <td><label>3X a prazo no Cartão</label></td>
                </tr>
                <tr>
                <td><label>Cartões Aceitos</label></td>
                <td><img src="https://i.pinimg.com/736x/38/a0/6e/38a06e480d48454e14ac511878a1e8e1.jpg" alt="cartões" id="img01"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Comprar"></td>
                    <td><input type="reset" value="Limpar"></td>
                </tr>
                
            </tbody>
        </table>
    </form>
</body>
</html>