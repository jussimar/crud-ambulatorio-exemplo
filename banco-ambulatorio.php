<?php

    function cadastroAmb($conexao, $nome,$logradouro,$cidade,$estado){
        $query = "insert into tb_ambulatorio values (null, '$nome','$logradouro','$cidade','$estado')";
        mysqli_query($conexao, $query);
    }
    
    function listarAmb($conexao){
        $query = "SELECT * FROM tb_ambulatorio";
        $result = mysqli_query($conexao, $query);
        return $result;
    }
    
    function deletarAmb($conexao,$codigo){
        $query = "delete from tb_ambulatorio where cd_ambulatorio = $codigo";
        mysqli_query($conexao, $query);
    }
    
    function adicionaMedico($conexao,$codigoMedico, $codigoAmb){
        $query = "insert into tb_medico_ambulatorio values(null,$codigoAmb,$codigoMedico)";
        mysqli_query($conexao, $query);
    }
    
    function listarMedicoPorAmb($conexao,$codigoAmb){
        $query = "SELECT cd_medico, cd_ambulatorio, nm_medico, nm_ambulatorio FROM tb_medico_ambulatorio, tb_medico,";
        $query .= "tb_ambulatorio WHERE cd_medico = id_medico AND cd_ambulatorio = id_ambulatorio AND cd_ambulatorio =$codigoAmb";
        $result = mysqli_query($conexao, $query);
        return $result;
    }
    