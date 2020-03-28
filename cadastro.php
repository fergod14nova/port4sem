<?php
// dados da conexxão
$serv = "localhost";
$user = "root";
$pass = "";
$db = "zera";

// iniciando comunicação com o banco
$conn = new mysqli($serv,$user,$pass,$db);

// testando conexão em 3,2,1...
// if($conn->connect_error){
//     die("sem conexão".connect_error);
// }
// else{
//     echo "conexão bem sucedida!";
// }
// caso a conexão seja bem sucedida, comente o trecho acima, não apague!

// recebendo dados da página cad.php
$user = $_POST['cad_login'];
$password = $_POST['cad_password'];
$key = $_POST['cad_cpf'];


// // VERIFICANDO SE O LOGIN JÁ EXISTE
// $ve_se_ja_tem_aqui = "SELECT login FROM usuarios WHERE login = '$key'";
// $id = $_POST['cad_cpf'];
// if($ve_se_ja_tem_aqui == $id){
//     echo "<script language='javascript' type'text/javascript'>
//     alert('Usuário Já Cadastrado!'); window.location.href='index.php';</script>";
//     die();
// }

// inserindo dados no banco
$sql_inserir_dados = "INSERT INTO usuarios (login,senha) VALUES('$user','$password')";

// verificando a inserção dos dados
if($conn->query($sql_inserir_dados)===TRUE){
    echo "<script language='javascript' type'text/javascript'>
    alert('USUÁRIO CADASTRADO COM SUCESSO!'); window.location.href='home.php';</script>";
}
else{
    echo"<script language='javascript' type'text/javascript'>
    alert('Falha ao inserir dados: '); window.location.href='index.php';</script>";
}
$conn->close();
?>