<?php

session_start();

if (!isset($_SESSION["id"])) {
    die("Você não está logado, para acessar essa página faça login a seguir: <p><a href=\"index.php\">Entrar</a></p>");
}
