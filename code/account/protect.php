<?php

session_start();

if (!isset($_SESSION["id"])) {
    die("Você não está logado, para acessar essa página faça login a seguir: <p><a href=\"/Web-Fake_Store/code/login/login.php\">Entrar</a></p>");
}
