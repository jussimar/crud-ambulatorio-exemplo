<?php include('header.php')?>

        
        <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de médico</h2>
            </div>
        </div>
        <form method="post" action="cadastro-medico.php">
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
               <div class="col-md-3">
                   <label for="">CPF:</label>
                   <input type="text" name="cpf" class="form-control"/>
               </div>
               <div class="col-md-3">
                   <label for="">CRM:</label>
                   <input type="number" name="crm" class="form-control"/>
               </div>
               <div class="col-md-3">
                   <label for="">Especialidade:</label>
                   <select name="especialidade" id="" class="form-control">
                       <option value="Clinico Geral">Clinico Geral</option>
                       <option value="Oftalmologista">Oftalmologista</option>
                       <option value="Ortopedista">Ortopedista</option>
                   </select>
               </div>
               <div class="col-md-3">
                   <label for="">Valor Consulta:</label>
                   <input type="number" name="vlcosulta" class="form-control"/>
               </div>
           </div>
           <div class="row">
               <div class="col-md-12">
                   <button type="submit" class="btn btn-success btn-block">Salvar</button>
               </div>
           </div>
        </form>
        
<?php include('footer.php')?>        
