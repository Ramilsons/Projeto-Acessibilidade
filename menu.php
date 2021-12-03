<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="./css/paginas/menu.css">
    <title>Menu | Seu site mais acessível</title>
</head>
<body>
    <?php include './includes/header.php'; ?>

    <img  class="banner" src="./img/menu/banner.svg" alt="">
    <main class="position-relative">
        <article class="ms-auto col-12 col-md-8">

            <hgroup>
                <h1 id="principal">Construa um Menu acessível para seu site</h1>
                <h2 id="introducao">Introdução</h2>
            </hgroup>
            <p>Os menus são um conjunto de links que tem por finalidade levar o usuário de uma página para outra página.</p>
            <h2 id="tags">Tags</h2>
            <p>Primeiro, devemos destacar que é de enorme importância a semântica do seu código pois ela será analisada por tecnologias assistivas. Então passaremos pelas principais tags que deverão ser usadas no menu.</p>
            <p>Para abranger os links das páginas, é interessante usar <strog><code>&lt;a&gt;</code></strong> ou <code>&lt;ol&gt;</code>. A tag <code>&lt;ul&gt;</code> deve ser usada quando a ordem dos links não tem importância, já o <code>&lt;ol&gt;</code> deve ser usado quando a ordem dos elementos tem importância.</p>
            <section  class="copy-code">
                <button class="d-block ms-auto" aria-label="Copiar código">
                    <img src="./img/copy.png" alt="duas paginas, umas sobrepondo a outra" title="copiar código">
                </button>
                <div>
                    <code>
                        &lt;ul&gt;
                            &lt;li&gt;&lt;a href="…"&gt;Home&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="…"&gt;Notícias&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="…"&gt;Contato&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    </code>
                </div>
            </section>
            <p>O conteúdo anterior, deverá ser inserido dentro uma tag <code>&lt;nav&gt;</code>, tag própria para ser usada nos conteúdos navegacionais.</p>
            <p>É importante também, rotular essa tag com ajuda do aria-label, pois tornará mais fácil a compreensão dos usuários e até mesmo ferramentas que auxiliam pessoas com deficiências. Abaixo usamos ela:</p>
            <section  class="copy-code">
                <button class="d-block ms-auto" aria-label="Copiar código">
                    <img src="./img/copy.png" alt="duas paginas, umas sobrepondo a outra" title="copiar código">
                </button>
                <div>
                    <code>
                        <nav aria-label="Menu principal">
                                <ul>
                                    <li><a href="…">Home</a></li>
                                    <li><a href="…">Notícias</a></li>
                                    <li><a href="…">Contato</a></li>
                                </ul>
                        </nav>
                    </code>
                </div>
            </section>
            <p>Por fim, deixe claro ao usuário em qual página ele está atualmente. Para isso, uma prática recomendada é o uso do atributo <strong>aria-current</strong> com o valor "page". Veja a demonstração a seguir:</p>
            <section class="copy-code">
                <button class="d-block ms-auto" aria-label="Copiar código">
                    <img src="./img/copy.png" alt="duas paginas, umas sobrepondo a outra" title="copiar código">
                </button>
                <div>
                    <code>
                        <li><a href="…" aria-current="page">Home</a></li>
                    </code>
                </div>
            </section>
            <p>Os leitores de tela levarão isso em conta na hora de transmitir a página para o usuário, a fim de não causar mal-entendidos.</p>

            <h2 id="estilo">Estilo do Menu</h2>
            <p>Partindo para o design de um menu, temos que nos atentar em combinar bom visual com acessibilidade, para isso deixamos algumas dicas a seguir.</p>
            <p>Se tratando de deixar visível para o usuário em qual página ele está, temos dois exemplos: o primeiro mostra que a pessoa está na Home(Início) usando um contraste de cor comparado aos outros. Porém, para pessoas com algum daltonismo isso pode ser incômodo já que além das cores não há mais nada para associar com a página atual.</p>
            <img src="./img/menu/im1.svg" alt="Três botões alinhados horizontalmente, onde o primeiro com o texto Início está com a cor do texto branca e o fundo azul. Os outros dois botões estão com a cor da fonte azul e o fundo branco">
            <p>Para isso, olhe o segundo exemplo, nesse além das cores é usado um sublinhado o que já ajudaria e muito os daltonicos. Perceba que é algo simples de ser implementado e que faz total diferença para esses usuários.</p>
            <section class="copy-code">
                <button class="d-block ms-auto" aria-label="Copiar código">
                    <img src="./img/copy.png" alt="duas paginas, umas sobrepondo a outra" title="copiar código">
                </button>
                <div>
                    <code>
                        a.active{
                            text-decoration: underline;
                        }
                    </code>
                </div>
            </section>
            <img src="./img/menu/im2.svg" alt="Três botões alinhados horizontalmente, onde o primeiro com o texto Início está com um sublinhado abaixo do texto, a cor do texto branca e o fundo azul. Os outros dois botões estão com a cor da fonte azul e o fundo branco">
            <p>O segundo ponto que queremos demonstrar, é o espaço de clique entre os botões. No primeiro exemplo, temos os itens com pouco espaço entre si e com uma área de clique muito pequena, dificultando o uso para aqueles que possuem alguma dificuldade no uso do mouse ou touch.</p>
            <img src="./img/menu/im3.svg" alt="Três botões alinhados horizontalmente, onde o todos estão com a fonte na cor amarela e o fundo azul. O primeiro contém o texto Início, o segundo Notícias e o terceiro Blog">
            <p> No segundo exemplo colocamos a maneira que seria mais adequada, um espaço bom entre os elementos e uma área de clique maior:</p>
            <img src="./img/menu/im4.svg" alt="Três botões alinhados horizontalmente, onde o todos estão com a fonte na cor amarela e o fundo azul. O primeiro contém o texto Início, o segundo Notícias e o terceiro Blog">

        </article>
        <section class="position-absolute top-0 start-0 pt-4">
            <div class="row">
                <h3 class="col-9">Tópicos</h3>
                <button class="col-2 ms-auto invisible" aria-label="Fechar">X</button>
            </div>
            <nav>
                <ul>
                    <li><a href="#introducao">Introdução</a></li>
                    <li><a href="#tags">Tags</a></li>
                    <li><a href="#estilo">Estilo</a></li>
                </ul>
            </nav>
        </section>
    </main>
    <?php include './includes/footer.php'; ?>
</body>
</html>