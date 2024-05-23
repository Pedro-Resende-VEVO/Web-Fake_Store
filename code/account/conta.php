<?php

include ("conexao.php");

include ("protect.php");

$sql_code = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

$userWish = $sql_code

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="conta.css">
</head>

<body id="js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="conta.js"></script>
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
        <aside>
            <section>
                <h3>Change your password</h3>
                <p></p>
            </section>

            <section>
                <h3>Logout</h3>
                <p></p>
            </section>
        </aside>


        <section id="profile">
            <h1>Your profile</h1>
            <hr>
            <article id="account">
                <h3 style="text-align: center;">Account information</h3>
                <h5>Name: <?php echo $_SESSION['nome'] ?></h5><br>
                <h5>Email: <?php echo $_SESSION['email'] ?></h5>
            </article>

            <article id="wish">
                <h3 style="text-align: center;">Wishlist</h3>
                <p><?php echo ($userWhish)?></p>
            </article>
        </section>


    </main>
</body>

</html>

<style>
    main {
        display: flex;
        margin: 5%;
        justify-content: space-between;
    }

    aside{
        background-color: antiquewhite;
        padding: 2%;
        border-radius: 40%;
        height: 15%;
    }

    #profile {
        justify-content: center;
        padding: 2%;
        width: 70%;
    }

    #account,
    #wish {
        background-color: burlywood;
        padding: 2% 5%;
    }

</style>