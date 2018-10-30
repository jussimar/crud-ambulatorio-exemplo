<?php
 include('conecta.php');
 include('banco-ambulatorio.php');

$codigo = $_POST['codigo'];
try{
    deletarAmb($conexao,$codigo);
    $conexao->close();
    header("Location:tela-listar-ambulatorio.php");

} catch(Exception $e){
     echo "Erro: $e";
}

