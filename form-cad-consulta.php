<?php 
    include('header.php');
    include('conecta.php');
    include('banco-ambulatorio.php');
    include('banco-paciente.php');
?>

        
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de Consulta</h2>
            </div>
        </div>
        <form method="post" action="cadastro-consulta.php">
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="">Data:</label>
                         <input type="date" name="data" class="form-control"/>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="">Ambulatorio</label>
                         <select name="ambulatorio" id="ambulatorio" class="form-control">
                            <?php
                                $result = listarAmb($conexao);
                                while($linha = mysqli_fetch_assoc($result)){
                            ?>    
                              <option value="<?php echo $linha['cd_ambulatorio']?>">
                                  <?php echo $linha['nm_ambulatorio']?>
                              </option>
                            <?php
                                }//fim do laço do fetch
                            ?>
                         </select>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="">Paciente</label>
                         <select name="paciente" id="paciente" class="form-control">
                             <?php
                                $result = listarPaciente($conexao);
                                while($linha = mysqli_fetch_assoc($result)){
                            ?>    
                              <option value="<?php echo $linha['cd_paciente']?>">
                                  <?php echo $linha['nm_paciente']?>
                              </option>
                            <?php
                                }//fim do laço do fetch
                            ?>
                         </select>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="">Médico</label>
                         <select name="medico" id="medico" class="form-control">
                         </select>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <button type="submit" class="btn btn-success btn-block">Salvar</button>
             </div>
        </form>
        
<?php include('footer.php')?>        
