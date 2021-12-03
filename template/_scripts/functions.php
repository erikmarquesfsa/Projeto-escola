<?php

function qtde_alunos(){
    /*Função para retornar 
    qtde de alunos no sistema */
    include "config.php";
    $sql = "SELECT count(id) as total FROM cad_aluno";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['total'];

}

function qtde_prof(){
    /*Função para retornar 
    qtde de professores no sistema */
    include "config.php";
    $sql = "SELECT count(id) as total FROM cad_prof";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['total'];

}





?>