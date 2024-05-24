<?php
include ('conexao.php');

$aviso = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM user WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 0) {

        $sql_code = "INSERT INTO user (nome, email, senha) VALUES ('$nome','$email','$senha')";
        $sql_query = $mysqli->query($sql_code) or die($aviso = "Falha na execução do código SQL" . $mysqli->error);        

        header("Location: /Web-Fake_Store/code/menu/index.html");
    } else {
        $aviso = "Falha ao registrar! E-mail já está sendo utilizado";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="registro.css">
</head>

<body id="js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>

    <script type="module" src="BD.js"></script>
</body>

<body>
    <header>

        <img id="logo" src="img/Logo.png" width="20%" onclick="switchPage()">
        <div class="part1">
            <h3 id="sese">Welcome to <br><strong>Sesas Store!</strong></h3>


            <!--Pesquisa-->
            <nav id="pesquisa">
                <div>
                    <input type="text" id="textPes" placeholder="Search for a product">
                </div>
                <div onclick="pes()">
                    <a href="/code/search/pesquisa.html"><button>Search</button></a>
                </div>
            </nav>
        </div>

        <!--Navbar-->

        <div class="part2">
            <ul class="nav">

                <li class="nav-item">
                    <h5><a class="nav-link" href="/code/login/login.html">Sign in</a>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="/code/register/registro.html">Register</a>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="/code/account/conta.html">My Accont</a>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="#">Track Order</a>
                </li>
            </ul>

            <!--Carrinho-->
            <div id="info">
                <b>Informações do Aluno:</b>
                <ul>
                    <li><em>Nome:</em> Pedro Henrique Resende Menezes</li>
                    <li><em>Curso:</em> Sistemas de Informação</li>
                </ul>
                <div>
                    <button>
                        <img src="img/carrinho.png" width="5%">
                        MY CART
                    </button>
                </div>
            </div>
        </div>

    </header>

    <main>
        <section id="abaEsquerda">
            <div id="textoCentral">
                <h3>Welcome Back!</h3>
                <p>if you <b>already have an account</b><br><i>keep conect with us</i><br>please login with the button
                    below
                </p>

                <button type="button" class="btn btn-primary" onclick="loginDirect()">Dark</button>
            </div>
        </section>

        <section id="abaDireita">
            <h3>Create Account</h3>

            <div id="Auth">
                <button class="btnAuth"><img src="img/logoGoogle.png" width="60%"></button>
                <button class="btnAuth"><img src="img/logoGoogle.png" width="60%"></button>
                <button class="btnAuth"><img src="img/logoGoogle.png" width="60%"></button>
            </div>

            <p>or use your email for registration:</p>

            <form action="registro.php" method="post">
                <div class="mb-3">
                    <label for="inputEma" class="form-label">Name</label>
                    <input type="text" id="name" name="nome">
                </div>
                <div class="mb-3">
                    <label for="inputEma" class="form-label">Email address</label>
                    <input type="text" id="email" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="inputPass" class="form-label">Password</label>
                    <input type="password" name="senha">
                </div>
                <button type="submit">Entrar</button>
            </form>
            <br>
            <p><?php echo ($aviso) ?></p>
        </section>
    </main>

</body>

</html>