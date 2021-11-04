<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <title>Home | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main>
        <article>
            <div class="container">
                <div class="row">
                    <h1>Dúvidas sobre Acessibilidade?</h1>
                </div>
                <div class="row">

                </div>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="exampleInputname1">
                    </div>
                    <div class="mb-3">
                        <label for="floatingTextarea" class="form-label">Sugestão   </label>
                        <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>  
        </article>
        <section>
            <div class="container">
                <div class="row">
                    <h2>Quem somos</h2>
                </div>
                <div class="row">
                    <img src="" alt="" class="img-fluid">

                    <h4>Nome</h4>
                    <h4>Função</h4>
                    <h6>RA</h6>
                </div>
                <div class="row">
                    <img src="" alt="" class="img-fluid">

                    <h4>Nome</h4>
                    <h4>Função</h4>
                    <h6>RA</h6>
                </div>
                <div class="row">
                    <img src="" alt="" class="img-fluid">

                    <h4>Nome</h4>
                    <h4>Função</h4>
                    <h6>RA</h6>
                </div>
                <div class="row">
                    <img src="" alt="" class="img-fluid">

                    <h4>Nome</h4>
                    <h4>Função</h4>
                    <h6>RA</h6>
                </div>
            </div>
        </section>
    </main>
    <?php include './includes/footer.php'; ?>
</body>

</html>