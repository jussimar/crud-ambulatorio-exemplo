<?php 
    include('conecta.php');
    include('banco-medico.php');
    include('banco-ambulatorio.php');
    include('header.php');
?>
        <div class="row">
            <div class="col-md-12">
                <h2>Adicionar Médico a Ambulatorio</h2>
            </div>
        </div>
        <form method="post" action="cadastro-medico-ambulatorio.php">
           <div class="row">
               <div class="col-md-6">
                   <label for="nome">Ambulatorio</label>
                   <select name="ambulatorio" id="" class="form-control">
                       <?php
                            $result = listarAmb($conexao);
                            while($linha = mysqli_fetch_assoc($result)){
                        ?>
                          <option value="<?php echo $linha['cd_ambulatorio']?>">
                              <?php echo $linha['nm_ambulatorio']?>
                          </option>  
                        <?php
                            }
                       ?>
                   </select>
               </div>
               <div class="col-md-6">
                   <label for="sobrenome">Médico</label>
                    <select name="medico" id="" class="form-control">
                        <?php
                            $result = listarMedico($conexao);
                            while($linha = mysqli_fetch_assoc($result)){
                        ?>
                              <option value="<?php echo $linha['cd_medico']?>">
                                  <?php echo $linha['nm_medico']?>
                              </option>  
                        <?php
                            }
                       ?>
                    </select>
               </div>
           </div>
           <div class="row">
               <div class="col-md-12">
                   <button type="submit" class="btn btn-success btn-block">Salvar</button>
                </div>
           </div>
        </form>
        
<?php include('footer.php')?>        
