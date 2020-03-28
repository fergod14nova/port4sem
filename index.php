<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cad2.php" method="POST">
        <label>CPF:</label><input type="text" name="cad_cpf" id="cad_cpf" placeholder="Apenas Números" maxlength="11"><br>
        <Label>Nome Completo:</Label><input type="text" name="cad_login" id="cad_login"><br>
        <Label>Senha:</Label><input type="password" name="cad_password" id="cad_password"><br>
        <input type="submit" value="Cadastrar" id="Cadastrar" name="Cadastrar">
    </form>
</body>
</html>