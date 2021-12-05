<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="css/paginas/design.css">
    <title>Design | Seu site mais acessível</title>
</head>

<body>
    <main>
        <?php include './includes/header.php'; ?> <main>
            <article>
                <div class="container" id="principal">
                    <h3 class="titulo_forma">Dicas de Design Acessivel</h3>
                    <div class="row mt-5 mb-5">
                        <div class="col-12 col-md-12 col-lg-6" id="div-linha">
                            <img src="img/design/design1.jpg" alt="Imagem descreve uma mulher trabalhando em um ambiente confortável. Imagem retirada do site freepik.com" class="img-fluid" id="img_design1">

                            <div class="bloco">
                                <h5 class="titulo_conteudo">Contraste de cor acessível</h5>
                                <p>Escolhendo a paleta de cores da sua página ou aplicação, faça testes relacionados à cor do texto versus cor de fundo da página, beneficiando pessoas com daltonismo</p>
                                <h5 class="titulo_conteudo2">Design Responsivo</h5>
                                <p>O design responsivo tem uma relação direta com a acessibilidade. Fazer com que o software se adapte à tela do usuário é importantíssimo, bem como evitar bloqueio de orientação e zoom. A forma como o conteúdo vai ser exibido, o tamanho das fontes, botões e contraste de cor trabalham em conjunto para garantir que o design responsivo seja acessível.</p>
                                <h5 class="titulo_conteudo2">Tamanho das Fontes</h5>
                                <p>O modo como as fontes estão dispostas das fontes faz toda a diferença em uma aplicação. A partir dela, é possível orientar a leitura do usuário e definir prioridades. Pessoas com problemas de visão, tem dificuldade em enxergar letras pequenas dificultando a leitura do conteúdo. Por isso, a função de aumentar ou diminuir o tamanho da fonte auxilia e muito esses usuários.</p>
                                <h5 class="titulo_conteudo2">Alt, Tags e Labels</h5>
                                <p>Adicionar tags assim como labels nos botões, é algo muito simples e que impacta positivamente as vidas de pessoas com baixa ou nenhuma visão. Essas configurações permitem que os leitores de tela descrevam aos usuários com deficiência tudo o que está em tela.</p>
                            </div>

                            <div class="row explicacao">
                                <p>Essas são regras que devem ser seguidas a risca, é muito importante prestar atenção nelas para projetar um site de forma acessível para todos os usuários da web. A W3C também é uma forma de consulta primordial quando mencionamos acessibilidade na web. </p>
                            </div>

                            <img src="img/design/design3.jpg" alt="Imagem descreve uma conversa amigável entre duas pessoas. Imagem retirada do site freepik.com" class="img-fluid" id="img_design3">
                        </div>

                        <div class="col-12 col-md-12 col-lg-6" id="div-linha2">

                            <img src="img/design/design2.jpg" alt="Imagem descreve uma mulher trabalhando muito feliz ao lado de seu gato de estimação. Imagem retirada do site freepik.com" class="img-fluid" id="img_design2">

                            <div class="bloco_texto">
                                <h5 class="example">Ex: Contraste de cor</h5>
                                <div class="explicacao2">
                                    <pre class="chroma">
<code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span><span class="na"> class</span><span class="o">=</span><span class="s">"container"</span><span class="na"> style</span><span class="o">=</span><span class="s">"background-color: #0000ff;"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="na"> style</span><span class="o">=</span><span class="s">"color: #fff;"</span><span class="p">&gt;</span><span class="text"> This colors are beatiful! </span><span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code>
                                    </pre>
                                </div>

                                <h5 class="example2 ">Ex: Design Responsivo</h5>
                                <div class="explicacao2">
                                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"container"</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"row"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col"</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col"</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"row"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col-8"</span><span class="p">&gt;</span>col-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col-4"</span><span class="p">&gt;</span>col-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre>
                                </div>

                                <h5 class="example2 ">Ex: Tamanho das Fontes</h5>

                                <div class="explicacao2">
                                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">h1</span><span class="p">&gt;</span>h1. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h2</span><span class="p">&gt;</span>h2. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h3</span><span class="p">&gt;</span>h3. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h3</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h4</span><span class="p">&gt;</span>h4. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>h5. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h6</span><span class="p">&gt;</span>h6. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h6</span><span class="p">&gt;</span>
</code></pre>
                                </div>

                                <h5 class="example2">Ex: Alt, Tags e Label</h5>
                                <div class="explicacao2">
                                    <pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleInputEmail1"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Email address<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"email"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleInputEmail1"</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">"emailHelp"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"emailHelp"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-text"</span><span class="p">&gt;</span>We'll never share your email with anyone else.<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleInputPassword1"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"password"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleInputPassword1"</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3 form-check"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"checkbox"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-check-input"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleCheck1"</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-check-label"</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleCheck1"</span><span class="p">&gt;</span>Check me out<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"submit"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary"</span><span class="p">&gt;</span>Submit<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre>
                                </div>


                                <img src="img/design/design4.jpg" alt="Imagem descreve duas pessoas realizando um teste, onde a pessoa da esquerda está realizando o teste facilmente e a da direita está com algumas dúvidas. Imagem retirada do site freepik.com" class="img-fluid" id="img_design2">
                            </div>
                        </div>
                    </div>
            </article>
        </main>
        <section>
            <div class="container">
                <div class="row">
                    <h3>Bibliografia</h3>
                    <p>Exemplos de código baseados na documentação do Bootstrap. <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Clique aqui para acessar a documentação do Bootstrap</a></p>
                    <p class="bibliografia_ajuste">Textos baaseados no artigo publicado no site Inovação Digital <a href="https://inovacaodigital.blog/design-acessivel/">Clique aqui para acessar o artigo mencionado</a></p>
                </div>
            </div>
        </section>
        <?php include './includes/footer.php'; ?>
</body>

</html>