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
                <div class="col-12 col-md-12 col-lg-6 titulo">
                        <h1>Principais Falhas</h1>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <img src="img/principais falhas/principais1.jpg" alt=" dois homens um em pé zombando do outro , que se encontra sentado, encolhido , com aparência de estar chateado." class="img-fluid">
                    </div>
                </div>


                <div class="row conteudo" id="principal">
                    <h2>1. Imagens inacessíveis</h2>
                    <p>As imagens são acessadas por pessoas com deficiência visual (cegas ou de baixa visão) através de leitores de tela que identificam os textos alternativos e retornam o conteúdo em forma de áudio para o usuário. Se esses textos não existem ou estão incompreensíveis, o usuário pode não entender o contexto ou o significado daquela imagem.</p>
                </div>

                <div class="row linha">
                    <hr size="4">
                </div>
                
                <div class="row conteudo">
                    <h2>2. Falhas na navegação por teclado</h2>
                    <p>A mais importante ferramenta para a navegação é permitir que o usuário consiga identificar onde está o foco da ação. Ao identificar o foco, ele consegue saber quais são os itens interativos da página e navegar normalmente. Se esse foco não está visível, o usuário se perde na navegação. O ideal é que o foco esteja visível não somente quando se passa o mouse, mas quando se faz o foco por teclado. </p>
                </div>

                <div class="row linha">
                    <hr size="4">
                </div>

                <div class="row conteudo">
                    <h2>3. Falta de descrição nos links</h2>
                    <p>É possivel observar que boa parte dos links presentes em sites pelo nosso país contém uma descrição curta, sem nenhuma indicação de onde está enviando o usuário. O correto nessas situações é sempre optar por uma descrição mais completa mostrando ao usuário para onde ele será enviado ao clicar naquele link.</p>
                </div>

                <div class="row linha">
                    <hr size="4">
                </div>

                <div class="row conteudo">
                    <h2>4. Navegação nos formulários</h2>
                    <p>Os formulários são em sua essência formas de interagir e coletar informações do usuário. Eles obviamente devem ser acessíveis a qualquer pessoa que acesse sua aplicação, por isso deve se atentar as descrições dos campos do formulário e também o tipo de navegação que pode se utilizar para andar pelo campos do formulário. Muitas vezes os campos não possuem a descrição correta dificultando a compreensão de pessoas que possuem deficiência.</p>
                </div>

                <div class="row">

                </div>
            </div>
        </article>
    </main>

    <section>
            <div class="container">
                <div class="row">
                    <h3>Bibliografia</h3>
                    <p>Textos baaseados nos artigos publicados no site Acessibilidade Legal <a href="http://www.acessibilidadelegal.com">Clique aqui para acessar o site mencionado</a></p>
                    <p class="bibliografia_ajuste">Imagens retiradas do site freepik <a href="https://br.freepik.com/home">Clique aqui para acessar o site freepik</a></p>
                </div>
            </div>
        </section>

    <?php include './includes/footer.php'; ?>
</body>

</html>