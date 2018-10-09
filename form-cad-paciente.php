<?php include('header.php')?>

        
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de Paciente</h2>
            </div>
        </div>
        <form method="post" action="cadastro-paciente.php">
           <div class="row">
               <div class="col-md-4">
                   <label for="nome">Nome:</label>
                   <input type="text" name="nome" class="form-control" id="nome"/>
               </div>
               <div class="col-md-8">
                   <label for="sobrenome">Sobrenome:</label>
                   <input type="text" name="sobrenome" class="form-control" id="sobrenome"/>
               </div>
           </div>
           <div class="row">
               <div class="col-md-4">
                   <label for="">CPF:</label>
                   <input type="text" name="cpf" class="form-control"/>
               </div>
               
           </div>
           <div class="row">
               <div class="col-md-12">
                   <button type="submit" class="btn btn-success btn-block">Salvar</button>
               </div>
           </div>
        </form>
        
<?php include('footer.php')?>        
