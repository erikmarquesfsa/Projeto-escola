<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<?php include "_scripts/grafico_barra.php"; ?>


<style>
  #chartdiv {
	width:100%;
	height:500px;
	font-size:11px;
}		
</style>

<div class="container-fluid topo">
    <div class="row">
        <div class="col-md-3">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">QTDE de alunos</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Alunos</h6>
                    <p class="card-text">
                        <?php echo qtde_alunos(); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">QTDE de Disciplinas</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Disciplinas</h6>
                    <p class="card-text">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">QTDE de Professores</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Prof</h6>
                    <p class="card-text"><?php echo qtde_prof(); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">QTDE de Reprovados</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Rep</h6>
                    <p class="card-text">0</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid topo">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">Cadastros por dia</h5>
                    <p class="card-text">
                    <div id="chartdiv"></div>	
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
