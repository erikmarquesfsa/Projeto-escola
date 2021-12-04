<?php include "../header.php"; ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php

if(!empty($_POST)){
    include "config.php";
    $nome_func = $_POST['nome_func'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $dt_admissao = $_POST['dt_admissao'];

    $sql = "INSERT INTO cad_func (nome,data_nascimento,data_admissao) 
    values ('$nome_func','$dt_nascimento','$dt_admissao')";
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