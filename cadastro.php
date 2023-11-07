<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <p>
        Preencha os Campos do Formulario de Cadastro de Clientes para Realizar as Compras
    </p>
    <form method="get" action="produtos.php">
        <table>
            <tbody>
                <tr>
                    <td>NOME:</td>
                    <td><input type="text" name="nome" required placeholder="Digite Seu Nome"></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="number" name="cpf" required placeholder="Digite Seu CPF" maxlength="11"></td>
                </tr>
                <tr>
                    <td>E-MAIL:</td>
                    <td><input type="email" name="email" required placeholder="Digite Seu E-mail"></td>
                </tr>
                <tr>
                    <td>SENHA:</td>
                    <td><input type="password" name="senha" required placeholder="Digite Sua Senha"></td>
                </tr>                
                <tr>
                    <td>CONFIRMAR SENHA:</td>
                    <td><input type="password" name="confirma_senha" required placeholder="Confirme Sua Senha"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="CADASTRAS"></td>
                    <td><input type="reset" value="LIMPAR"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>