<style>
    tr th{
        font-weight: bolder;
    }
</style>

<?php 
    include('conecta.php');
    include('banco-medico.php');
    include('header.php');
?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cód.</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CPF</th>
                <th>CRM</th>
                <th>Especialidade</th>
                <th>Valor Consulta</th>
                <th>Excluir</th>
                <th>Atualizar</th>
            </tr>
        </thead>
    <?php
        $result = listarMedico($conexao);
        while($linha = mysqli_fetch_assoc($result)){
    ?>    
        <tr>
            <td><?php echo $linha['cd_medico']; ?></td>
            <td><?php echo $linha['nm_medico']; ?></td>
            <td><?php echo $linha['nm_sobrenome']; ?></td>
            <td><?php echo $linha['nr_cpf']; ?></td>
            <td><?php echo $linha['nr_crm']; ?></td>
            <td><?php echo $linha['ds_especialidade']; ?></td>
            <td><?php echo $linha['vl_consulta']; ?></td>
            <td>
                <form method="post" action="apaga-medico.php">
                   <input type="hidden" name="codigo" value="<?php echo $linha['cd_medico'];?>"/>
                   <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
            <td>
                <form method="post" action="frm-atualiza-medico.php">
                   <input type="hidden" name="codigo" value="
                   <?php echo $linha['cd_medico'];?>"/>
                   <button type="submit" class="btn btn-warning">Atualizar</button>
                </form>
            </td>
        </tr>
    <?php
        }//fim do laço do fetch
    ?>
    </table>   
<?php include('footer.php')?>        
