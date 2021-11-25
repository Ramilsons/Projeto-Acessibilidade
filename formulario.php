<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './includes/bootstrap-css.php'; ?>
    <title>Formulários | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>

    <article>
        <h1>Trabalhando com Formulários Acessíveis</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id lacinia massa, vel sodales mi. Morbi
            placerat dolor nec leo tempus dapibus. Mauris urna dui, molestie vel vehicula et, commodo vel magna. Etiam
            eget nisl a tortor molestie facilisis sed ac tellus. Quisque nec interdum elit, at volutpat elit. Proin
            facilisis ultrices venenatis. Mauris ut libero consequat, rhoncus massa sed, feugiat turpis. Aliquam at orci
            laoreet, convallis risus at, tristique arcu. Cras auctor condimentum augue, nec dictum purus maximus ac. In
            non diam lobortis magna vestibulum efficitur. Proin lectus lorem, rutrum sit amet suscipit sit amet,
            lobortis vel dolor. Curabitur nulla eros, venenatis a nisl a, porta fringilla diam. Duis ultricies vehicula
            nisl a efficitur. Integer nibh felis, malesuada sit amet erat ut, lobortis ultrices ipsum. Praesent mattis
            eros metus, eu aliquet augue scelerisque sed.</p>
    </article>

    <main>  
        <h2>Exemplo:</h2>
        <img src="img/form-acessivel.png" alt="Exemplo de um código para um formulário Acessível">

        <form action method="post">
            <div>
                <label for="nome">Preencha com seu Nome:</label>
                <input type="text" id="nome" />
            </div>
            <div>
                <label for="email">Preencha com seu E-mail:</label>
                <input type="email" id="email" />
            </div>
            <div>
                <label for="msg">Deixe a sua Mensagem:</label>
                <textarea id="msg"></textarea>
            </div>
        </form>

        <section>
            <button aria-label="Copiar código">
                <img src="" alt="">
            </button>

            <code>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab neque dolores, nam omnis eos dolor consequuntur ad aut veritatis dignissimos minus alias dolorem! Nobis ipsum placeat, modi expedita commodi debitis?
            </code>
        </section>
    </main>

    <section>

        <h2>Tags para a construção de um Formulário</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id lacinia massa, vel sodales mi. Morbi
            placerat dolor nec leo tempus dapibus. Mauris urna dui, molestie vel vehicula et, commodo vel magna. Etiam
            eget nisl a tortor molestie facilisis sed ac tellus. Quisque nec interdum elit, at volutpat elit. Proin
            facilisis ultrices venenatis. Mauris ut libero consequat, rhoncus massa sed, feugiat turpis. Aliquam at orci
            laoreet, convallis risus at, tristique arcu. Cras auctor condimentum augue, nec dictum purus maximus ac. In
            non diam lobortis magna vestibulum efficitur. Proin lectus lorem, rutrum sit amet suscipit sit amet,
            lobortis vel dolor. Curabitur nulla eros, venenatis a nisl a, porta fringilla diam. Duis ultricies vehicula
            nisl a efficitur. Integer nibh felis, malesuada sit amet erat ut, lobortis ultrices ipsum. Praesent mattis
            eros metus, eu aliquet augue scelerisque sed.</p>

    </section>

    <section>

        <h3>Utilização da Label</h3 >
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id lacinia massa, vel sodales mi. Morbi
            placerat dolor nec leo tempus dapibus. Mauris urna dui, molestie vel vehicula et, commodo vel magna. Etiam
            eget nisl a tortor molestie facilisis sed ac tellus. Quisque nec interdum elit, at volutpat elit. Proin
            facilisis ultrices venenatis. Mauris ut libero consequat, rhoncus massa sed, feugiat turpis. Aliquam at orci
            laoreet, convallis risus at, tristique arcu. Cras auctor condimentum augue, nec dictum purus maximus ac. In
            non diam lobortis magna vestibulum efficitur. Proin lectus lorem, rutrum sit amet suscipit sit amet,
            lobortis vel dolor. Curabitur nulla eros, venenatis a nisl a, porta fringilla diam. Duis ultricies vehicula
            nisl a efficitur. Integer nibh felis, malesuada sit amet erat ut, lobortis ultrices ipsum. Praesent mattis
            eros metus, eu aliquet augue scelerisque sed.</p>

    </section>

    <?php include './includes/footer.php'; ?>
</body>

</html>