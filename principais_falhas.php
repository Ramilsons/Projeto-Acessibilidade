<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="css/paginas/principais.css">
    <title>Principais Falhas | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="img/principais falhas/principais1.jpg" alt="..." class="img-fluid">
                    </div>
                    <div class="col-6 titulo">
                        <h1 id="principal">Principais Falhas</h1>
                    </div>
                </div>


                <div class="row conteudo">
                    <h2>1. Imagens acessíveis</h2>
                    <p>As imagens são acessadas por pessoas com deficiência visual (cegas ou de baixa visão) através de leitores de tela que identificam os textos alternativos e retornam o conteúdo em forma de áudio para o usuário. Se esses textos não existem ou estão incompreensíveis, o usuário pode não entender o contexto ou o significado daquela imagem.</p>
                </div>

                <div class="row linha">
                    <hr size="4">
                </div>
                
  
                <div class="row conteudo">
                    <h2>2. Navegação por teclado</h2>
                    <p>A mais importante ferramenta para a navegação é permitir que o usuário consiga identificar onde está o foco da ação. Ao identificar o foco, ele consegue saber quais são os itens interativos da página e navegar normalmente. Se esse foco não está visível, o usuário se perde na navegação. O ideal é que o foco esteja visível não somente quando se passa o mouse, mas quando se faz o foco por teclado. </p>
                </div>

            </div>
        </article>
    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>