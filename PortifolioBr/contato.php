<?php
    require "validaAcesso.php"
?>

<html lang="pt/br">

<head>
    <title>Portifolio Brasileiro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="css/contato.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <header class="page-header-bg bg-dark">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="contato.php">Contato</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuHeader" aria-controls="menuHeader" aria-expanded="false" aria-label="Mostrar Menus">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuHeader">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="inicio.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobreMim.php">Sobre mim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="experiencia.php">Experi&ecirc;ncia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="habilidades.php">Habilidades</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </section>
    <section>
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="px-4 py-5 mt-4 mb-3 text-center text-light">
                            <h1 class="display-5 fw-bold">CONTATO</h1>
                            <hr>
                            <div class="col-lg-6 mx-auto">
                                <p class="lead mb-1 fw-normal">Fique a vontade para me contatar abaixo e responderei o mais r&aacute;pido poss&iacute;vel.</p>
                                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="d-flex justify-content-center text-light">
                <div class="row">
                    <form>
                        <div class="container-fluid">
                            <div class="row col customBackground">
                                <div class="mb-1">
                                    <label for="email" class="form-label col-form-label-lg">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-1">
                                    <label for="name" class="form-label col-form-label-lg">Nome</label>
                                    <input type="password" class="form-control" id="name">
                                </div>
                                <div class="mb-1">
                                    <label for="message" class="form-label col-form-label-lg">Mensagem</label>
                                    <textarea class="form-control mb-1" id="message" rows="6" style="resize: none;"></textarea>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </section>
</body>
<footer>
    <div class="container">
        <div class="row fixed-bottom">
            <div class="col-12 bg-dark text-light text-center">
                <em>Copyright All Rights Reserved © 2022 | Desenvolvido por Gabriel Sousa</em>
            </div>
        </div>
    </div>
</footer>

</html>