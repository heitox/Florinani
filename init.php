<?php

session_start();

require_once 'data.php';

if(!isset($_SESSION['materiais'])) {
    $_SESSION['materiais'] = $materiais_base;
}


// 1. Verifica se existe um ID na URL, se não existir, deixa nulo
$id = $_GET['id'] ?? null;

// 2. Se tiver ID e esse ID existir na lista de materiais da sessão...
if ($id !== null && isset($_SESSION['materiais'][$id])) {
    // ...criamos a variável $materiais com os dados APENAS desse item
    $materiais = $_SESSION['materiais'][$id];
} else {
    // Caso contrário, $materiais fica falso e cai no seu "Material não encontrado"
    $materiais = false;
}