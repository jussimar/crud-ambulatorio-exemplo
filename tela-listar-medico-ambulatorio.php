
<?php 
    include('conecta.php');
    include('banco-ambulatorio.php');
    include('header.php');
?>
    <div class="row">
        <div class="col-md-12">
            <select name="lista" id="lista" class="form-control">
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
        
            <table class="table" id="tabela">
                
              
       
            </table>
        </div>
    </div>
    
<?php include('footer.php')?>        
