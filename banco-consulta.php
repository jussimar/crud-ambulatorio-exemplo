<?php
      function cadastraConsulta($conexao, $data, $ambulatorio, $paciente, $medico){
        $query = "insert into tb_consulta values (null, '$data',$ambulatorio,$paciente,$medico)";
        mysqli_query($conexao, $query);
        
    }