<?php
 include('conecta.php');
 include('banco-consulta.php');

 $data = $_POST['data'];
 $ambulatorio = $_POST['ambulatorio'];
 $paciente = $_POST['paciente'];
 $medico = $_POST['medico'];

try{
    cadastroConsulta($conexao, $data, $ambulatorio, $paciente, $medico);
    header("Location:form-cad-consulta.php");
    echo $data;
    $conexao->close();
} catch(Exception $e){
     echo "Erro: $e";
}
