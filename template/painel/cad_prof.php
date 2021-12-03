<form method="post" action="_scripts/salvar_prof.php">
    <div class="container-fluid">
        <h1>Cadastro de Professor</h1>
        <div class="row">
            <div class="col-md-12" style="padding:10px">
                <input type="text" class="form-control" name="nome_prof" required placeholder="Digite o nome do Professor">
            </div>
            <div class="col-md-6" style="padding:10px">
                <select class="form-control" name="formacao" required>
                   <option value="" disabled selected>Formação...</option>
                    <option value="SUPERIOR">SUPERIOR</option>
                    <option value="POS">PÓS</option>
                    <option value="MESTRE">MESTRE</option>
                    <option value="DOUTOR(A)">DOUTOR(A)</option>
                </select>
            </div>
            <div class="col-md-6" style="padding:10px">
                <input type="text" class="form-control" name="disciplina" required placeholder="Informe a Disciplina">
            </div>
            <div class="col-md-4" style="padding:10px">
                <input type="text" class="form-control" name="idade" required placeholder="Digite a idade">
            </div>
            <div class="col-md-4" style="padding:10px">
                <select class="form-control" name="sexo" placeholder="SEXO" required>
                    <option value="" disabled selected>Sexo...</option>
                    <option value="F">FEMININO</option>
                    <option value="M">MASCULINO</option>
                </select>
            </div>
            <div class="col-md-4" style="padding:10px">
            <input type="text" class="form-control" name="ch" required placeholder="Informe a CH">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>