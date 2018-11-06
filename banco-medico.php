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
    
    function listarUmMedico($conexao, $codigo){
        $query = "SELECT * FROM tb_medico where cd_medico = $codigo";
        $result = mysqli_query($conexao, $query);
        return $result;
    }
    
    function atualizaMedico($conexao, $codigo, $nome, $sobrenome, $cpf, $crm, $especialidade, $valor){
        $query = "update tb_medico set nm_medico = '$nome', nm_sobrenome = '$sobrenome',";
        $query .="nr_cpf = '$cpf', nr_crm = '$crm', ds_especialidade = '$especialidade',";
        $query .="vl_consulta = $valor where cd_medico = $codigo";
        mysqli_query($conexao, $query);
    }