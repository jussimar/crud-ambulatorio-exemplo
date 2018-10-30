<style>
    tr th{
        font-weight: bolder;
    }
</style>

<?php 
    include('conecta.php');
    include('banco-paciente.php');
    include('header.php');
?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cód.</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CPF</th>
                <th>Excluir</th>
            </tr>
        </thead>
    <?php
        $result = listarPaciente($conexao);
        while($linha = mysqli_fetch_assoc($result)){
    ?>    
        <tr>
            <td><?php echo $linha['cd_paciente']; ?></td>
            <td><?php echo $linha['nm_paciente']; ?></td>
            <td><?php echo $linha['nm_sobrenome']; ?></td>
            <td><?php echo $linha['nr_cpf']; ?></td>
            <td>
                <form method="post" action="apaga-paciente.php">
                   <input type="hidden" name="codigo" value="<?php echo $linha['cd_paciente'];?>"/>
                   <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    <?php
        }//fim do laço do fetch
    ?>
    </table>   
<?php include('footer.php')?>        
