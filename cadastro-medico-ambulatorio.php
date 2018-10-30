<?php
 include('conecta.php');
 include('banco-ambulatorio.php');

 $codigoMedico = $_POST['medico'];
 $codigoAmb = $_POST['ambulatorio'];
 
try{
    adicionaMedico($conexao, $codigoMedico, $codigoAmb);
    $conexao->close();
    //header("Location:form-cad-paciente.php");
} catch(Exception $e){
     echo "Erro: $e";
}
