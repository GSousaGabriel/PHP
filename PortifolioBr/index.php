<html lang="pt/br">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet/less" type="text/css" href="css/login.css" />
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="d-flex justify-content-center text-light">
            <div class="row horizontal-center">
                <form action="validaLogin.php" method="POST">
                    <div class="container-fluid">
                        <div class="row col customBackground">
                            <div class="mb-3">
                                <label for="user" class="form-label col-form-label-lg">Usu&aacute;rio</label>
                                <input type="text" class="form-control opacityControl" id="user" name="user" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label col-form-label-lg">Senha</label>
                                <input type="password" class="form-control opacityControl" id="pass" name="pass">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <button type="submit" class="btn btn-primary mb-3 ms-3 col-2">Acessar</button>
                                    <a href="cadastro.php" class="btn btn-primary col-2 ms-auto mt-1 mb-3 me-2 text-light">Cadastre-se</a>
                                </div>
                            </div>
                            <?
                                if (isset($_GET['login']) && $_GET['login']== 'erro') {
                            ?>
                            <div class="container">
                                    <div class="row">
                                        <div class="text-danger">
                                            <label class="form-label col-form-label-lg">Usu&aacute;rio Inv&aacute;lido, confirme os dados!</label>
                                        </div>
                                    </div>
                                </div>
                            <?  }     ?>
                            <?
                                if (isset($_GET['login']) && $_GET['login']== 'cadastrado') {
                            ?>
                            <div class="container">
                                    <div class="row">
                                        <div class="col text-success">
                                            <label class="form-label col-form-label-lg">Cadastro realizado!</label>
                                        </div>
                                    </div>
                                </div>
                            <?  }     ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section>
</body>

</html>