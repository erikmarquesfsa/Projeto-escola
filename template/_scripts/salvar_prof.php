<?php include "../header.php"; ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php

if(!empty($_POST)){
    include "config.php";
    $nome_prof = $_POST['nome_prof'];
    $formacao = $_POST['formacao'];
    $disciplina = $_POST['disciplina'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $ch = $_POST['ch'];

    $sql = "INSERT INTO cad_prof (nome,formacao,disciplina,idade,sexo,ch) 
    values ('$nome_prof','$formacao','$disciplina','$idade','$sexo','$ch')";
    $query = $mysqli->query($sql);

    if($query){
?>
    <script type="text/javascript">
        Swal.fire({
        title: 'Salvo',
        text: 'Registros adicionados com sucesso',
        icon: 'success',
        confirmButtonText: 'Ok'
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            location.href="../painel.php?rota=painel";
        } 
        })
    </script>


<?php
    }else{
?>
        <script type="text/javascript">
        Swal.fire({
        title: 'Erro ( ͡° ͜ʖ ͡°)',
        text: 'Houve um erro. Por favor, entre em contato com os desenvolvedores pelo e-mail devssenai@gmail.com',
        icon: 'error',
        confirmButtonText: 'Ok'
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            location.href="../painel.php?rota=painel";
        } 
        })
    </script>

<?php
    }

}else{

    echo "Página sem registros";
}



?>