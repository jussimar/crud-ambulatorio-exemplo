<?php
 include('conecta.php');
 include('banco-paciente.php');

$codigo = $_POST['codigo'];
try{
    deletarPaciente($conexao,$codigo);
    $conexao->close();
    header("Location:tela-listar-pacientes.php");

} catch(Exception $e){
     echo "Erro: $e";
}

