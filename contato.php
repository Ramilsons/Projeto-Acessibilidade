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
                <div class="row" id="principal">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5 mb-5">
                        <h2 id="principal">Quem somos</h2>
                        <div class="card mt-5" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="img/contato/felipe_profile.jpeg" class="img-fluid" alt="A imagem mostra o desenvolvedor do site, chamado Felipe.">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Felipe</h5>
                                        <p class="card-text">RA:2650831823016</p>
                                        <p class="funcao">Função:Coringa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="img/contato/ramilson_profile.png" class="img-fluid" alt="A imagem mostra o desenvolvedor do site, chamado Ramilson.">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Ramilson Felix da Silva</h5>
                                        <p class="card-text">RA: 2650832023016</p>
                                        <p class="funcao">Função: Coder/Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="img/contato/tatiana_profile.png" class="img-fluid" alt="A imagem mostra o desenvolvedor do site, chamado Tatiana.">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Tatiana Nakata Mishima</h5>
                                        <p class="card-text">RA: 2650832023019</p>
                                        <p class="funcao">Função: Gerente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4" style="max-width: 450px;">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="img/contato/vitor_profile.png" class="img-fluid" alt="A imagem mostra o desenvolvedor do site, chamado Vitor.">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Vitor Hugo Teixeira Oliveira</h5>
                                        <p class="">RA: 2650832023028</p>
                                        <p class="funcao">Função: Coder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5 mb-5 form_contato" id="secundario">
                        <fieldset class="tituloDuvida"><legend>Dúvidas sobre Acessibilidade?</legend></fieldset>

                        <form id="group_contato" aria-label="Formulário de contato para coleta de informações do usuário e sugestões">
                            <div class="mb-3">
                                <label for="EmailUsuario" class="form-label">Email </label>
                                <input type="email" class="form-control" id="EmailUsuario" placeholder="Email..." aria-describedby="campo de texto para inserir o email">
                            </div>
                            <div class="mb-3">
                                <label for="NomeUsuario" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="NomeUsuario" placeholder="Nome..." aria-describedby="campo de texto para inserir o nome">
                            </div>
                            <div class="mb-3">
                                <label for="duvida" class="form-label">Dúvida</label>
                                <textarea class="form-control" name="duvida" placeholder="Dúvida..." rows="10" cols="50" id="duvida" aria-describedby="campo de texto para inserir sua dúvida"></textarea>
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