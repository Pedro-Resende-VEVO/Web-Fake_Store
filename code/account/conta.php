<?php

include ("conexao.php");

include ("protect.php");

$userID = $_SESSION['id'];

$sql_code = "SELECT * FROM wish WHERE userID = '$userID'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

$quantidade = $sql_query->num_rows;

if ($quantidade == 0) {
    $userWhish = "-User without wish products-";
} else {
    $userWhish = "<div class=\"container text-center\"> <div class=\"row g-3\">";

    for ($i = 0; $i < $quantidade; $i++) {
        $userWhish .=
            "<div class=\"col-md-3 ms-md-auto p-3 border\">
        <div class=\"card\" onclick=\"deta(1)\">
          <img id=\"img1\" width=\"100%\">
          <h5 id=\"title1\"></h5>
          <div id=\"infoCard\">
            <p class=\"price\" id=\"pre1\"></p>
            <form method=\"GET\">
              <button type=\"submit\" name=\"wish\" value=\"1\">❤</button>
            </form>
          </div>
        </div>
      </div>
        <script> $.ajax({
            url: 'https://fakestoreapi.com/products/1'
        })
            .done(response => {
                $('#img1').prop('src', response.image);
                document.getElementById('title1').innerHTML = response.title;
                document.getElementById('pre1').innerHTML = \"R$\" + response.price;
                document.getElementById('desc1').innerHTML = response.description;
            }) </script>";
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

    <main>
        <aside>
            <!-- <section>
                <h3>Change your password</h3>
                <p></p>
            </section> -->

            <section>
                <h3 style="text-decoration: none; color: #000;"><a href="logout.php">Logout</a></h3>
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
                <p><?php echo $userWhish ?></p>
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

    aside {
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

    /* TODO cardWish */

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-height: 400px;
        min-height: 300px;
        height: auto;
        width: auto;
        text-align: center;
        font-family: arial;
        background-color: whitesmoke;
        border-style: solid;
        overflow: hidden;
        cursor: pointer;
        /* white-space: nowrap; */
    }

    #infoCard {
        display: flex;
        justify-content: space-between;
    }

    .price {
        color: grey;
        font-size: 22px;
        margin-left: 5%;
    }

    #img1,
    #img2,
    #img3,
    #img4,
    #img5,
    #img6 {
        min-height: 250px;
        max-height: 250px;
        height: auto;
        width: auto;
    }

    #title1,
    #title2,
    #title3,
    #title4,
    #title5,
    #title6 {
        text-align: justify;
        padding: 5%;
        box-sizing: border-box;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        /* fallback */
        max-height: 35px;
        /* fallback */
        -webkit-line-clamp: 2;
        /* number of lines to show */
        -webkit-box-orient: vertical;
    }

    .card button {
        border: none;
        padding-left: 10px;
        padding-right: 10px;
        color: white;
        background-color: #000;
        cursor: pointer;
        font-size: 20px;
        margin-right: 5%;
        margin-bottom: 5%;
        justify-content: center;
        align-items: center;
        border-radius: 30%;
    }

    .card button:hover {
        opacity: 0.7;
    }
</style>

<script>
    function switchPage() {
        window.location.href = "/Web-Fake_Store/code/menu/index.php";
    }

    function deta(valor) {
        window.location.href = "/Web-Fake_Store/code/details/detalhes.html?produto=" + valor;
    }
</script>