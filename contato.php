<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main>
        <article>
            <h1>Dúvidas sobre Acessibilidade?</h1>
            <form>
                <label for="campo1">
                    Campo 1: <span>*</span>
                </label>
                <input id="campo1" type="text" required>

                <label for="campo2">
                    Campo 2: <span>*</span>
                </label>
                <input id="campo2" type="text" required>

                <label for="campo3">
                    Campo 3: <span>*</span>
                </label>
                <textarea id="campo3" required></textarea>

                <button type="button">Enviar</button>
            </form>
        </article>
        <section>
            <div class="container">
                <div class="row">
                    <h2>Quem somos</h2>
                </div>
                <div class="row">
                    <img src="" alt="">

                    <h4>Nome</h4>
                    <h4>Função</h4>
                    <h6>RA</h6>
                </div>
                <div class="row">
                    <img src="" alt="">

                    <h4>Nome</h4>
                    <h4>Função</h4>
                    <h6>RA</h6>
                </div>
                <div class="row">
                    <img src="" alt="">

                    <h4>Nome</h4>
                    <h4>Função</h4>
                    <h6>RA</h6>
                </div>
                <div class="row">
                    <img src="" alt="">

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