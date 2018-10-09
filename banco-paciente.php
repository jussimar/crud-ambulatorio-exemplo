<?php

    function cadastraPaciente($conexao, $nome, $sobrenome, $cpf){
        $query = "insert into tb_paciente values (null, '$nome','$sobrenome','$cpf')";
        mysqli_query($conexao, $query);
        
    }
    