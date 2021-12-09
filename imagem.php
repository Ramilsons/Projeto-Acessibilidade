<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <?php include './includes/bootstrap-css.php'; ?> 
  <link rel="stylesheet" href="./css/paginas/imagem.css">
  
  <title>Imagem | Seu site mais acessível</title>

</head>

<body>
  <?php include './includes/header.php'; ?>
  <main>
    <section class="abaixo-do-header">
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <h1 class="display-4" id="principal">Trabalhando com Imagens </h1>
        </div>
      </div>
      <div class="container text-left">
        <h4 class="título secundário">As imagens devem ter alternativas de texto que descrevam as informações ou funções
          representadas por elas. Isso garante que as imagens possam ser usadas por pessoas com várias deficiências.
          Este tutorial demonstra como fornecer alternativas de texto apropriadas com base na finalidade da imagem.</h4>
      </div>
    </section>
    <article class="container">

      <div class="d-grid col-12 col-md-6 mx-auto">
        <details>
          <summary>Imagens Informativas <img src="./img/menu/seta-detalhes.svg" alt="Exibir o texto desse tópico"></summary>
          <p> Imagens que representam graficamente conceitos e informações, normalmente imagens, fotos e
            ilustrações. A alternativa em texto deve ser pelo menos uma breve descrição que transmita as informações
            essenciais apresentadas pela imagem.
            As imagens informativas transmitem um conceito ou informação simples que pode ser expressa em uma frase
            ou frase curta. A alternativa em texto deve transmitir o significado ou conteúdo exibido visualmente, o
            que normalmente não é uma descrição literal da imagem.
            Em algumas situações, uma descrição literal detalhada pode ser necessária, mas apenas quando o conteúdo
            da imagem é toda ou parte das informações transmitidas. Tratar uma imagem como informativa ou decorativa
            é um julgamento que os autores fazem, com base no motivo da inclusão da imagem na página.
            Exemplo 01:</p>
          <div class="row mt-5 mb-5" id="img01">
            <div class="col-12">
              <img src="./img/imagem/tampa.webp" class="img-fluid"
                alt=" A imagem dá a seguinte instrução: empurre a tampa para baixo e gire no sentido anti-horário (da direita para a esquerda)" />
            </div>
          </div>
          <p> Este diagrama simples ilustra uma direção anti-horária para desparafusar a tampa ou tampa de uma
            garrafa. As informações podem ser descritas em uma frase curta, de modo que a alternativa em texto
            “Empurre a tampa para baixo e gire no sentido anti-horário (da direita para a esquerda)” é fornecida no
            atributo alt.</p>
          <section class="copy-code">
            <button class="d-block ms-auto" aria-label="Copiar código">
              <img src="./img/copy.png" alt="Copiar código" title="Copiar código">
            </button>
            <div>
              <code>
                    &lt;img src="./img/tampa.png"  class="img-fluid" alt="Empurre a tampa para baixo e gire no sentido anti-horário (da direita para a esquerda)"&gt;
               
            </code>
            </div>
          </section>
          <p>Exemplo 02: </p>

          <div class="row mt-5 mb-5" id="img02">
            <div class="col-12">
              <img src="./img/imagem/familia.webp" class="img-fluid" alt=" A imagem passa a seguinte mensagem:Somos amigos da família" />
            </div>
          </div>
          <p>Esta fotografia mostra um grupo familiar feliz. Ele está sendo usado para dar a impressão de que o site
            ou a empresa que representa é familiar. A alternativa em texto é “Somos amigos da família”, pois é a que
            melhor descreve a impressão pretendida. </p>
          <section class="copy-code">
            <button class="d-block ms-auto" aria-label="Copiar código">
              <img src="./img/copy.png" alt="Copiar código." title="Copiar código">
            </button>
            <div>
              <code>
                    &lt;img src="./img/familia.jpg" class="img-fluid" alt="Somos amigos da família"&gt;
               
            </code>
            </div>
          </section>
          <p> Grupos de imagens: se várias imagens transmitem uma única informação, a alternativa em texto para uma
            imagem deve transmitir as informações para todo o grupo.</p>
        </details>


        <details>
          <summary>Imagens Decorativas<img src="./img/menu/seta-detalhes.svg" alt="Exibir o texto desse tópico"></summary>
          <p>Imagens decorativas não adicionam informações ao conteúdo de uma página. Por exemplo, as informações
            fornecidas pela imagem já podem ser fornecidas em texto adjacente ou a imagem pode ser incluída para
            tornar o site mais atraente visualmente.</p>

          <p>Nesses casos, um texto alternativo nulo (vazio) deve ser fornecido (alt = "") para que possam ser
            ignorados por tecnologias assistivas, como leitores de tela. Os valores de texto para esses tipos de
            imagens adicionariam confusão audível à saída do leitor de tela ou poderiam distrair os usuários se o
            tópico fosse diferente do texto adjacente. Deixar de fora o atributo alt também não é uma opção porque,
            quando não é fornecido, alguns leitores de tela anunciarão o nome do arquivo da imagem.</p>

          <p>Tratar uma imagem como decorativa ou informativa é um julgamento que somente o autor pode fazer, com
            base no motivo da inclusão da imagem na página. As imagens podem ser decorativas quando:Estilo visual, como
            bordas, espaçadores e cantos; Suplementar para vincular o texto para melhorar sua aparência ou aumentar a
            área clicável;
            Ilustrativo do texto adjacente, mas não contribuindo com informações (“colírio para os olhos”);
            Identificado e descrito pelo texto circundante.</p>
          <div class="row mt-5 mb-5" id="img03">
            <div class="col-12">
              <img src="./img/imagem/barra.webp" class="img-fluid" alt="Imagem de uma barra, que exemplifica uma imagem decorativa">
            </div>
          </div>

          <section class="copy-code">
            <button class="d-block ms-auto" aria-label="Copiar código">
              <img src="./img/copy.png" alt="Copiar código." title="Copiar código">
            </button>
            <div>
              <code>
                    &lt;img src="./img/barra.png" alt=""&gt;
               
            </code>
            </div>
          </section>
        </details>

        <details>
          <summary>Imagens Funcionais<img src="./img/menu/seta-detalhes.svg" alt="Exibir o texto desse tópico"></summary>
          <p>Imagens funcionais são usadas para iniciar ações em vez de transmitir informações. Eles são usados ​​em
            botões, links e outros elementos interativos. A alternativa em texto para a imagem deve transmitir a
            ação que será iniciada (o propósito da imagem), ao invés de uma descrição da imagem. Por exemplo, a
            alternativa em texto deve ser “imprimir esta página” em vez de “(imagem de uma) impressora”.</p>
          <div class="row mt-5 mb-5" id="img04">
            <div class="col-12">
              <img src="./img/imagem/impressora.webp" class="img-fluid" alt="Imagem de uma impressora" />
            </div>
          </div>
          <section class="copy-code">
            <button class="d-block ms-auto" aria-label="Copiar código">
              <img src="./img/copy.png" alt="Copiar código." title="Copiar código">
            </button>
            <div>
              <code>
                    &lt;a href="javascript:print()"&gt;
                    &lt;img src="impressora.png." alt="Imprimir esta página"&gt;&lt;/a&gt;
            </code>
            </div>
          </section>
          <p>Valores alt ausentes ou vazios criam problemas significativos para usuários de leitores de tela porque
            imagens funcionais são essenciais para a funcionalidade do conteúdo. Os leitores de tela geralmente
            anunciam o nome do arquivo de imagem, o URL da imagem ou o URL do destino do link, o que dificilmente
            ajudará os usuários a entender a ação que será iniciada pela imagem.</p>
        </details>
        <details>
          <summary>Imagens Complexas<img src="./img/menu/seta-detalhes.svg" alt="Exibir o texto desse tópico"></summary>
          <p>Imagens complexas contêm informações substanciais - mais do que pode ser transmitido em uma frase ou
            frase curta. Normalmente são: gráficos e diagramas, incluindo fluxogramas e organogramas; diagramas e
            ilustrações em que o texto da página depende do usuário ser capaz de compreender a imagem;
            mapas mostrando locais ou outras informações, como sistemas meteorológicos.</p>
          <p>
            Nestes casos, é necessária uma alternativa em texto em duas partes. A primeira parte é a descrição curta
            para identificar a imagem e, quando apropriado, indicar a localização da descrição longa. A segunda
            parte é a longa descrição - uma representação textual das informações essenciais veiculadas pela imagem.
            Lembre-se de que imagens complexas podem ser difíceis de entender por muitas pessoas - em particular
            pessoas com dificuldades de aprendizagem e pessoas com baixa visão. Descrições longas beneficiam muitas
            pessoas e é uma boa prática disponibilizá-las a todos, por exemplo, como parte do conteúdo principal.
            Também pode ser possível reduzir a complexidade desnecessária em suas imagens e torná-las mais fáceis de
            entender para todos.</p>
          <p>
            Também é uma boa prática referir-se e resumir imagens mais complexas do texto que acompanha. Por
            exemplo, uma referência como “O gráfico seguinte mostra que os visitantes se perderam no primeiro
            trimestre, mas os números recuperaram no segundo trimestre” ajuda a apontar as informações relevantes
            que a imagem pretende apresentar.</p>
          <p>
            Exemplo: um link de texto para a longa descrição adjacente à imagem.</p>
          <div class="row mt-5 mb-5" id="img05">
            <div class="col-12">
              <img src="./img/imagem/grafico.webp" class="img-fluid" alt="Imagem de um grafico utilizada como o exemplo de uma imagem complexa" />
            </div>
          </div>
          <section class="copy-code">
            <button class="d-block ms-auto" aria-label="Copiar código">
              <img src="./img/copy.png" alt="Copiar código ." title="Copiar código">
            </button>
            <div>
              <code>
                    &lt;p&gt;
                    &lt;img
		src="chart.png"
		alt="Bar chart showing monthly and total visitors for the first quarter 2014 for sites 1 to 3"&gt;&lt;br&gt;
                    &lt;a href="2014-first-qtr.html"&gt;&lt;Example.com Site visitors Jan to March 2014 text description of the bar chart&gt;/a&lt;/p&gt;
            </code>
            </div>
          </section>
        </details>
      </div>
    </article>
    <aside class="container">
      <div class="row" id="Referência">
        <p class="p1">
          Referência Bibliográfica:
          Web Accessibility Tutorials, 2021. Disponível
          em: https://www.w3.org/WAI/tutorials/images/. Acesso em: 28 de
          novembro de
          2021.
        </p>
      </div>
    </aside>
  </main>
  <?php include './includes/footer.php'; ?>
  <script src="./js/imagem.js"></script>
</body>

</html>