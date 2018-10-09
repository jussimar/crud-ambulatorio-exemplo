<?php 
    include('conecta.php');
    include('banco-medico.php');
    include('header.php');
?>

    <?php
        $result = listarMedico($conexao);
        while($linha = mysqli_fetch_assoc($result)){
            echo $linha['nm_medico']."<br>";
        }
    ?>

        
<?php include('footer.php')?>        
