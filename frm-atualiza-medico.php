<?php 
    include('conecta.php');
    include('banco-medico.php');
    include('header.php');
    $codigo = $_POST['codigo'];
?>
    <form method="post" action="atualiza-medico.php">
    <?php
        $result = listarUmMedico($conexao,$codigo);
        while($linha = mysqli_fetch_assoc($result)){
    ?>    
            <div class="row">
                <div class="col-md-2">
                    <label for="">Cod.:</label>
                    <input type="text" class="form-control" name="codigo" 
                    value="<?php echo $linha['cd_medico'];?>" readonly/>
                </div>
               <div class="col-md-5">
                   <label for="nome">Nome:</label>
                   <input type="text" name="nome" class="form-control" id="nome" 
                   value="<?php echo $linha['nm_medico'];?>"/>
               </div>
               <div class="col-md-5">
                   <label for="sobrenome">Sobrenome:</label>
                   <input type="text" name="sobrenome" class="form-control" 
                   id="sobrenome" 
                   value="<?php echo $linha['nm_sobrenome'];?>"/>
               </div>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <label for="">CPF:</label>
                   <input type="text" name="cpf" class="form-control" 
                   value="<?php echo $linha['nr_cpf'];?>"/>
               </div>
               <div class="col-md-3">
                   <label for="">CRM:</label>
                   <input type="number" name="crm" class="form-control" 
                   value="<?php echo $linha['nr_crm'];?>"/>
               </div>
               <div class="col-md-3">
                   <label for="">Especialidade:</label>
                   <select name="especialidade" id="" class="form-control">
                       <option value="Clinico Geral" 
                       <?php if($linha['ds_especialidade'] == "Clinico Geral") echo "selected"?>>
                           Clinico Geral
                        </option>
                       <option value="Oftalmologista"
                       <?php if($linha['ds_especialidade'] == "Oftalmologista") echo "selected"?>>
                           Oftalmologista
                        </option>
                       <option value="Ortopedista"
                       <?php echo $linha['ds_especialidade'] == "Ortopedista" ? "selected" : " "?>>
                           Ortopedista
                        </option>
                   </select>
               </div>
               <div class="col-md-3">
                   <label for="">Valor Consulta:</label>
                   <input type="number" name="vlcosulta" class="form-control" 
                   value="<?php echo $linha['vl_consulta'];?>"/>
               </div>
           </div>
           <div class="row">
               <div class="col-md-12">
                   <button type="submit" class="btn btn-warning btn-block">Salvar Alterações</button>
               </div>
           </div>
            
       
    <?php
        }//fim do laço do fetch
    ?>
    </form>
<?php include('footer.php')?>        
