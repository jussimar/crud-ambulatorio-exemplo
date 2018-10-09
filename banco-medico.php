<?php
    
    function cadastraMedico($conexao, $nome, $sobrenome, $cpf, $crm, $especialidade, $valor){
        $query = "insert into tb_medico values (null, '$nome','$sobrenome','$cpf',$crm,'$especialidade',$valor)";
        mysqli_query($conexao, $query);
        
    }
    
    function listarMedico($conexao){
        $query = "SELECT * FROM tb_medico";
        $result = mysqli_query($conexao, $query);
        return $result;
    }
    
    function deletarMedico($conexao,$codigo){
        $query = "delete from tb_medico where cd_medico = $codigo";
        mysqli_query($conexao, $query);
    } 