<?php
 include('conecta.php');
 include('banco-ambulatorio.php');

 $nomeAmb = $_POST['nomeAmbulatorio'];
 $logradouro = $_POST['endereco'];
 $cidade = $_POST['cidade'];
 $estado = $_POST['estado'];

try{
    cadastroAmb($conexao,$nomeAmb,$logradouro,$cidade,$estado);
    header("Location:form-cad-ambulatorio.php");
} catch(Exception $e){
     echo "Erro: $e";
}finally{
    $conexao->close();
}

