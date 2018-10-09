<?php
 include('conecta.php');
 include('banco-paciente.php');

 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $cpf = $_POST['cpf'];
 
try{
    cadastraPaciente($conexao, $nome, $sobrenome, $cpf);
    header("Location:form-cad-paciente.php");
} catch(Exception $e){
     echo "Erro: $e";
}finally{
    $conexao->close();
}

