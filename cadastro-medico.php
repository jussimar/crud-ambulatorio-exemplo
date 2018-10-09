<?php
 include('conecta.php');
 include('banco-medico.php');

 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $cpf = $_POST['cpf'];
 $crm = $_POST['crm'];
 $especialidade = $_POST['especialidade'];
 $valor = $_POST['vlcosulta'];
 
try{
    cadastraMedico($conexao, $nome, $sobrenome, $cpf, $crm, $especialidade, $valor);
    header("Location:index.php");
} catch(Exception $e){
     echo "Erro: $e";
}finally{
    $conexao->close();
}

