<?php

session_start();

require_once 'data.php';

if(!isset($_SESSION['materiais'])) {
    $_SESSION['materiais'] = $produtos_base;
}

// session_destroy();