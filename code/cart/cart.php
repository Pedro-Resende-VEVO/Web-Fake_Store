<?php

include ("protect.php");

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
                    <h5><a class="nav-link" href="/Web-Fake_Store/code/login/login.php">Sign in</a>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="/Web-Fake_Store/code/register/registro.php">Register</a>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="/Web-Fake_Store/code/account/conta.php">My Accont</a>
                </li>
                <li class="nav-item">
                    <h5><a class="nav-link" href="/Web-Fake_Store/code/cart/cart.php">Track Order</a>
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



</body>

</html>

<script>
    function switchPage() {
            window.location.href = "/Web-Fake_Store/code/menu/index.php";
        }
</script>