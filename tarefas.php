<?php
session_start();
include "banco.php";
$lista_tarefas = buscar_tarefas($conexao);
include "template.php"; ?>