<?php

    function cadastroAmb($conexao, $nome,$logradouro,$cidade,$estado){
        $query = "insert into tb_ambulatorio values (null, '$nome','$logradouro','$cidade','$estado')";
        mysqli_query($conexao, $query);
    }
    