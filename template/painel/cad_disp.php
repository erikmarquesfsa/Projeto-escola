<form method="post" action="_scripts/salvar_disp.php">
    <div class="container-fluid">
        <h1>Cadastro de Disciplinas</h1>
        <div class="row">
            <div class="col-md-12" style="padding:10px">
                <input type="text" class="form-control" name="nome" required placeholder="Digite o nome da Displina">
            </div>
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button> 
                <a href="painel.php?rota=cad_nota" class="btn btn-success">Lançar Nota</a> 
            </div>
        </div>
    </div>
</form>