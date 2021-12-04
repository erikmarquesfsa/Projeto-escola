<form method="post" action="_scripts/salvar_disp.php">
    <div class="container-fluid">
        <h1>Cadastro de Notas</h1>
        <div class="row">
            <div class="col-md-12" style="padding:10px">
                <select name="aluno" required class="form-control">
                <?php
                include "_scripts/config.php";
                $sql = "SELECT id,nome FROM cad_aluno";
                $query = $mysqli->query($sql);
                while($dados = $query->fetch_array()){
                ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="col-md-12" style="padding:10px">
                <select name="disciplina" required class="form-control">
                <?php
                include "_scripts/config.php";
                $sql = "SELECT id,nome FROM cad_disciplina";
                $query = $mysqli->query($sql);
                while($dados = $query->fetch_array()){
                ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="col-md-12" style="padding:10px">
                <select name="professor" required class="form-control">
                <?php
                include "_scripts/config.php";
                $sql = "SELECT id,nome FROM cad_prof";
                $query = $mysqli->query($sql);
                while($dados = $query->fetch_array()){
                ?>
                    <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
                <?php } ?>
                </select>
            </div>
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button> 
                <a href="painel.php?rota=cad_nota" class="btn btn-success">Lançar Nota</a> 
            </div>
        </div>
    </div>
</form>