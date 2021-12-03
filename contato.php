<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="css/paginas/contato.css">
    <title>Contato | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-6 mt-5 mb-5">
                        <h2 id="principal">Quem somos</h2>
                        <div class="card mt-5" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/contato/felipe_profile.jpeg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Felipe</h5>
                                        <p class="card-text">RA:</p>
                                        <p class="funcao">Função:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/contato/ramilson_profile.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Ramilson</h5>
                                        <p class="card-text">RA:</p>
                                        <p class="funcao">Função:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/contato/tatiana_profile.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Tatiana</h5>
                                        <p class="card-text">RA:</p>
                                        <p class="funcao">Função:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/contato/vitor_profile.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Vitor Hugo Teixeira Oliveira</h5>
                                        <p class="">RA: 2650832023028</p>
                                        <p class="funcao">Função: Coder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5 mb-5 form_contato">
                        <h2 class="tituloDuvida">Dúvidas sobre Acessibilidade?</h2>

                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="campo de texto para inserir o email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputname1" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="exampleInputname1">
                            </div>
                            <div class="mb-3">
                                <label for="floatingTextarea" class="form-label">Sugestão </label>
                                <textarea class="form-control" placeholder="" rows="10" cols="50" id="floatingTextarea"></textarea>
                            </div>
                            <div class="btn_div">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php include './includes/footer.php'; ?>
</body>

</html>