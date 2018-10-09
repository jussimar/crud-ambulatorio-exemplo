<?php include('header.php')?>

    <div class="row">
            <div class="col-md-12">
                <h2>Cadastro de médico</h2>
            </div>
        </div>
    <form method="post" action="cadastro-ambulatorio.php">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Nome do Ambulatório:</label>
                    <input type="text" name="nomeAmbulatorio" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Endereço:</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Cidade:</label>
                    <select name="cidade" id="" class="form-control">
                        <option value="Sao Paulo">São Paulo</option>
                        <option value="Belo Horizonte">Belo Horizonte</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Estado:</label>
                    <select name="estado" id="" class="form-control">
                        <option value="SP">São Paulo</option>
                        <option value="MG">Minas Gerais</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
            </div>
        </div>
    </form>

<?php include('footer.php')?> 