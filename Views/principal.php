<?php 

    require_once "../Models/WaiterDAO.php";

    WaiterDAO::verifyLogin();

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/principal.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/812210af5b.js" crossorigin="anonymous"></script>

    <title>Meu Restaurante</title>
</head>

<body onload="startTime()">

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                </div>
            </div>
        </nav>

    </header>

    <main class="container my-5">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="text-right" id="hour"></h1>
                <h2 class="text-right" id="date"></h2>
            </div>
        </div>

        <a href="anotarPedido.php" class="btn btn-primary p-4 mb-2"><i class="fas fa-plus mr-2"></i>Anotar pedido</a>
        <a href="consultarPedido.html" class="btn btn-primary p-4 mb-2"><i class="fas fa-search mr-2"></i>Consultar um pedido</a>


        <h2 class="mt-5">Pedidos Recentes</h2>
        <hr>

        <div class="accordion" id="accordionOrders">
            <div class="card">
                <div class="card-header bg-dark" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-white collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                            Mesa 1
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOrders">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pedido</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Horário</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lasanha a bolonhesa</td>
                                    <td>Em preparo</td>
                                    <td>20:35</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Refrigerante</td>
                                    <td>Entregue</td>
                                    <td>20:35</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Torta de Limão</td>
                                    <td>Em preparo</td>
                                    <td>21:10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-dark" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-white collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Mesa 2
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOrders">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pedido</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Horário</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lasanha a bolonhesa</td>
                                    <td>Em preparo</td>
                                    <td>20:35</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Refrigerante</td>
                                    <td>Entregue</td>
                                    <td>20:35</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Torta de Limão</td>
                                    <td>Em preparo</td>
                                    <td>21:10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/principal.js"></script>

    <script>
        //hours
        function startTime() {
            var date = new Date();
            var h = date.getHours();
            var m = date.getMinutes();
            var s = date.getSeconds();

            //adicionar 0 na frente dos num. < 10
            m = checkTime(m);
            s = checkTime(s);

            document.getElementById("hour").innerHTML = `${h}:${m}:${s}`;

            var t = setTimeout(function () { startTime() }, 1000);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>
</body>

</html>