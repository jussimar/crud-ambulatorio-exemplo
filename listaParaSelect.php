<?php
    include('conecta.php');
    include('banco-ambulatorio.php');
    $codigo = $_GET['codigo'];
    try{
        $result = listarMedicoPorAmb($conexao,$codigo);
        
        $registro = array(
            'lista' => array()  
        );
        $i =0;
        while($linha = mysqli_fetch_assoc($result)){
            $registro['lista'][$i] = array(
                'codigoMedico' => $linha['cd_medico'],
                'codigoAmb' => $linha['cd_ambulatorio'],
                'nomeAmbulatorio' => $linha['nm_ambulatorio'],
                'nomeMedico' => $linha['nm_medico'],
            );
            $i++;
        }
 
        echo json_encode($registro);
        
    }catch(Expetion $e){
        echo "Erro ao cadastrar!";
    }