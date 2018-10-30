<?php
 include('conecta.php');
 include('banco-medico.php');
 
 $codigo = $_POST['codigo'];
 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $cpf = $_POST['cpf'];
 $crm = $_POST['crm'];
 $especialidade = $_POST['especialidade'];
 $valor = $_POST['vlcosulta'];
 
try{
    atualizaMedico($conexao, $codigo, $nome, $sobrenome, $cpf, $crm, $especialidade, $valor);
    header("Location:tela-listar-medicos.php");
     $conexao->close();
    
} catch(Exception $e){
     echo "Erro: $e";
}

