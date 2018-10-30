<?php

    function cadastraPaciente($conexao, $nome, $sobrenome, $cpf){
        $query = "insert into tb_paciente values (null, '$nome','$sobrenome','$cpf')";
        mysqli_query($conexao, $query);
        
    }
    function listarPaciente($conexao){
        $query = "SELECT * FROM tb_paciente";
        $result = mysqli_query($conexao, $query);
        return $result;
    }
    
    function deletarPaciente($conexao,$codigo){
        $query = "delete from tb_paciente where cd_paciente = $codigo";
        mysqli_query($conexao, $query);
    } 