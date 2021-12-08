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
                <div class="container">
                    <h1 class="titulo_forma">Dicas de Design Acessivel</h1>
                    <div class="row mt-5 mb-5">
                        <div class="col-12 col-md-12 col-lg-6" id="div-linha">
                            <img src="img/design/design1.jpg" alt=" uma mulher mexendo em um computador vista à distância" class="img-fluid" id="img_design1">

                            <div class="bloco"  id="principal">
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

                            <img src="img/design/design3.jpg" alt=" um homem e uma mulher conversando" class="img-fluid" id="img_design3">
                        </div>

                        <div class="col-12 col-md-12 col-lg-6" id="div-linha2">

                            <img src="img/design/design2.jpg" alt=" uma mulher mexendo em um computador vista de perto" class="img-fluid" id="img_design2">

                            <div class="bloco_texto">
                                <h5 class="example">Ex: Contraste de cor</h5>

                                <section class="copy-code">
                                    <button class="d-block ms-auto" aria-label="copiar o código de exemplo">
                                        <img src="./img/copy.png" alt="copiar código." title="copiar código">
                                    </button>
                                    <div>
                                        <pre>
<code class="language-html" data-lang="html">
    <span class="p">&lt;</span><span class="nt">div</span><span class="na"> class</span><span class="o">=</span><span class="s">"container"</span><span class="na"> style</span><span class="o">=</span><span class="s">"background-color: #0000ff;"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">p</span><span class="na"> style</span><span class="o">=</span><span class="s">"color: #fff;"</span><span class="p">&gt;</span><span class="text"> Essas cores são lindas! </span><span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code>
                                    </pre>
                                    </div>
                                </section>

                                <h5 class="example2 ">Ex: Design Responsivo</h5>


                                <section class="copy-code">
                                    <button class="d-block ms-auto" aria-label="copiar o código de exemplo">
                                        <img src="./img/copy.png" alt="copiar código." title="copiar código">
                                    </button>
                                    <div>
                                        <pre>
                                    <code class="language-html" data-lang="html">
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"container"</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"row"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col"</span><span class="p">&gt;</span><span class="text"> col </span><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col"</span><span class="p">&gt;</span><span class="text"> col </span><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"row"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col-8"</span><span class="p">&gt;</span><span class="text"> col-8 </span><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"col-4"</span><span class="p">&gt;</span><span class="text"> col-4 </span><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
                                    </code>
                                    </pre>
                                    </div>
                                </section>

                                <h5 class="example2 ">Ex: Tamanho das Fontes</h5>

                                <section class="copy-code">
                                    <button class="d-block ms-auto" aria-label="copiar o código de exemplo">
                                        <img src="./img/copy.png" alt="copiar código." title="copiar código">
                                    </button>
                                    <div>
                                        <pre>
                                        <code class="language-html" data-lang="html">
        <span class="p">&lt;</span><span class="nt">h1</span><span class="p">&gt;</span><span class="text"> h1. Cabeçalho Bootstrap  </span><span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h2</span><span class="p">&gt;</span><span class="text"> h2. Cabeçalho Bootstrap  </span><span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h3</span><span class="p">&gt;</span><span class="text"> h3. Cabeçalho Bootstrap  </span><span class="p">&lt;/</span><span class="nt">h3</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h4</span><span class="p">&gt;</span><span class="text"> h4. Cabeçalho Bootstrap  </span><span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span><span class="text"> h5. Cabeçalho Bootstrap  </span><span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h6</span><span class="p">&gt;</span><span class="text"> h5. Cabeçalho Bootstrap  </span><span class="p">&lt;/</span><span class="nt">h6</span><span class="p">&gt;</span>
</code>                          </pre>
                                    </div>
                                </section>

                                <h5 class="example2">Ex: Alt, Tags e Label</h5>

                                <section class="copy-code">
                                    <button class="d-block ms-auto" aria-label="copiar o código de exemplo">
                                        <img src="./img/copy.png" alt="copiar código." title="copiar código">
                                    </button>
                                    <div>
                                        <pre tabindex="-1">
                                        <code class="language-html" data-lang="html">
    <span class="p">&lt;</span><span class="nt">form</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleInputEmail1"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span><span class="text"> Email </span><span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"email"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleInputEmail1"</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">"Campo de email"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">"emailHelp"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-text"</span><span class="p">&gt;</span><span class="text"> Nós nunca iremos compartilhar seu email </span><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
         <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
         <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleInputPassword1"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-label"</span><span class="p">&gt;</span><span class="text"> Senha </span>span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"password"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-control"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleInputPassword1"</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"mb-3 form-check"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">"checkbox"</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-check-input"</span> <span class="na">id</span><span class="o">=</span><span class="s">"exampleCheck1"</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">"form-check-label"</span> <span class="na">for</span><span class="o">=</span><span class="s">"exampleCheck1"</span><span class="p">&gt;</span><span class="text">Clique para verificar</span><span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">"submit"</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-primary"</span><span class="p">&gt;</span><span class="text">Enviar</span><span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code>                      </pre>
                                    </div>
                                </section>

                                <img src="img/design/design4.jpg" alt=" duas mulheres sentadas lado a lado, uma escrevendo em um caderno e outra olhando para o caderno com uma expressão de dúvida" class="img-fluid" id="img_design2">
                            </div>
                        </div>
                    </div>
            </article>
        </main>
        <section>
            <div class="container">
                <div class="row">
                    <h3>Bibliografia</h3>
                    <p>Exemplos de código baseados na documentação do Bootstrap. <a tabindex="0" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Clique aqui para acessar a documentação do Bootstrap</a></p>
                    <p class="bibliografia_ajuste">Textos baseados no artigo publicado no site Inovação Digital <a href="https://inovacaodigital.blog/design-acessivel/">Clique aqui para acessar o artigo mencionado</a></p>
                    <p class="bibliografia_ajuste">Imagens retiradas do site freepik <a href="https://br.freepik.com/home">Clique aqui para acessar o site freepik</a></p>
                </div>
            </div>
        </section>
        <?php include './includes/footer.php'; ?>
</body>

</html>