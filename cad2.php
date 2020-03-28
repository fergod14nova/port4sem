<?php

$login = $_POST['cad_login'];
$senha = $_POST['cad_password'];
$cpf = $_POST['cad_cpf'];



$conexao = "localhost";
$user = "root";
$psw = "";
$banco = "zera";

$connect = mysqli_connect($conexao,$user,$psw,$zera);

$query_select = "SELECT cpf FROM usuarios WHERE cpf = '$cpf'";
$select = mysql_query($connect);
$array = mysql_fetch_array($select);
$logarray = $array['cad_cpf'];

    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='index.php';</script>";
    }
    else{
        if($logarray == $cpf){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário já cadastrado');window.location.href='index.php';</script>";
            die();
        }
        else{$query = "INSERT INTO usuarios (cpf,login,senha) VALUES ('$cpf','$login','$senha')";
            $insert = mysql_query($query,$connect);

            if($insert){
                echo"<script language='javascript' type='text/javascript'>
                alert('Usuário Cadastrado com sucesso!');window.location.href='home.php';</script>";
            }
            else{
                echo"<script language='javascript' type='text/javascript'>
                alert('não foi possível cadastrar usuário');window.location.href='index.php';</script>";
            }
        }
    }

?>