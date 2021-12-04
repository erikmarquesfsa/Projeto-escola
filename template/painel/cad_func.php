<form method="post" action="_scripts/salvar_func.php">
    <div class="container-fluid">
        <h1>Cadastro de Funcionários</h1>
        <div class="row">
            <div class="col-md-12" style="padding:10px">
                <input type="text" class="form-control" name="nome_func" required placeholder="Digite o nome do Funcionário">
            </div>
            <div class="col-md-6" style="padding:10px">
            <label for="exampleDataList" class="form-label">Data de Nascimento</label>
                <input type="date" name="dt_nascimento" class="form-control">
            </div>
            <div class="col-md-6" style="padding:10px">
            <label for="exampleDataList" class="form-label">Data de Admissão</label>
                <input type="date" name="dt_admissao" class="form-control">
            </div>
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>