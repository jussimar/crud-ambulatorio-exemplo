<?php 
    include('conecta.php');
    include('banco-ambulatorio.php');
    include('header.php');
?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cód.</th>
                <th>Nome do Ambulatório</th>
                <th>Logradouro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Excluir</th>
            </tr>
        </thead>
    <?php
        $result = listarAmb($conexao);
        while($linha = mysqli_fetch_assoc($result)){
    ?>    
        <tr>
            <td><?php echo $linha['cd_ambulatorio']; ?></td>
            <td><?php echo $linha['nm_ambulatorio']; ?></td>
            <td><?php echo $linha['ds_logradouro']; ?></td>
            <td><?php echo $linha['ds_cidade']; ?></td>
            <td><?php echo $linha['sg_estado']; ?></td>
            <td>
                <form method="post" action="apaga-ambulatorio.php">
                   <input type="hidden" name="codigo" value="<?php echo $linha['cd_ambulatorio'];?>"/>
                   <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    <?php
        }//fim do laço do fetch
    ?>
    </table>       
    
        
<?php include('footer.php')?>        
