<?php

include ('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == null || $senha == null) {

        if (strlen($email) == 0) {
            echo "Preencha seu email";
        } else if (strlen($senha) == 0) {
            echo "Preencha sua senha";
        }
        header("Location: login.html");
    } else {

        $sql_code = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            session_start();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: /code/menu/index.html");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

        if (strlen($email) == 0) {
            echo "Preencha seu email";
        } else if (strlen($senha) == 0) {
            echo "Preencha sua senha";
        }
        header("Location: login.html");
    }
}

header("Location: login.html");