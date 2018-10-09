<?php
 include('conecta.php');
 include('banco-medico.php');

 $codigo = $_POST['codigo'];

 
try{
    deletarMedico($conexao,$codigo);
    header("Location:tela-listar-medicos.php");
} catch(Exception $e){
     echo "Erro: $e";
}finally{
    $conexao->close();
}

