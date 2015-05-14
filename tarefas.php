<?php
session_start();
include "banco.php";

if(isset($_GET['nome']) && $_GET['nome'] != ''){
	$tarefa = array();
	$tarefa['nome'] = $_GET['nome'];
	echo $tarefa['nome'];
	gravar_tarefa($conexao, $tarefa);
}

$lista_tarefas = array();

$lista_tarefas = buscar_tarefas($conexao);
include "template.php"; ?>