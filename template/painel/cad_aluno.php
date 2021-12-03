<form method="post" action="_scripts/salvar_aluno.php">
    <div class="container-fluid">
        <h1>Cadastro de Aluno</h1>
        <div class="row">
            <div class="col-md-12" style="padding:10px">
                <input type="text" class="form-control" name="nome_aluno" required placeholder="Digite o nome do Aluno">
            </div>
            <div class="col-md-12" style="padding:10px">
                <input type="text" class="form-control" name="nome_mae" required placeholder="Digite o nome da Mãe">
            </div>
            <div class="col-md-4" style="padding:10px">
                <input type="text" class="form-control" name="idade" required placeholder="Digite a idade">
            </div>
            <div class="col-md-4" style="padding:10px">
                <select class="form-control" name="sexo" placeholder="SEXO" required>
                    <option value="" disabled>Sexo</option>
                    <option value="F">FEMININO</option>
                    <option value="M">MASCULINO</option>
                </select>
            </div>
            <div class="col-md-4" style="padding:10px">
                <select class="form-control" name="deficiencia" placeholder="Necessidade Especial" required>
                    <option value="" disabled>Necessidade Especial</option>
                    <option value="SIM">SIM</option>
                    <option value="NAO">NÃO</option>
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>