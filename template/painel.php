
    <?php include "header.php" ?>
    <?php include "menu.php" ?>
    
    <!-- conteúdo-->

    <?php
    if(isset($_GET['rota'])){
        switch($_GET['rota']){

            case 'painel':
                include "painel/conteudo.php";
            break;

            case 'cad_aluno':
                include "painel/cad_aluno.php";
            break;

            case 'cad_prof':
                include "painel/cad_prof.php";
            break;
        }
    }
    ?>



    <?php include "js.php" ?>

    
    
    
  