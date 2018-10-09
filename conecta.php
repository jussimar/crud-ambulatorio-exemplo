<?php
    try{
        $conexao = mysqli_connect("localhost","jussimar","","bd_ambulatorio");
        
    }catch(Exception $e){
        echo "Erro: $e";
    }