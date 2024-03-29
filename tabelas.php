 <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="./css/paginas/tabelas.css">
    <title>Tabelas | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main >
        <section class="abaixo-do-header">
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <h1 class="display-4" id="principal">Trabalhando com Tabelas</h1>
          </div> 
                </div> 
              <div class="container text-center">
                <h2> Tabela Acessível</h2>
                </div>
        </section>
        <article class="container">   
        <div class="container text-center">
                <div class="row mt-5 mb-5 " id="imgs_tabela">
                    <div class="col-12">
                        <img src="./img/tabela/tabela2.webp" class="img-fluid" alt="  Tabela construída de forma acessível, com marcações que definem o título, cabeçalho e corpo da tabela. ">
                    </div>
                    </div>
                    </div>
            <section>
            <div class="container text-left" id="Texto tabela">
            <p class="p1">
            As tabelas de dados são usadas para organizar dados com um relacionamento lógico em grades. As tabelas acessíveis precisam de marcação HTML que indica células de cabeçalho e células de dados e define seu relacionamento. As tecnologias assistivas usam essas informações para fornecer contexto aos usuários.</p>
            <p class="p2">
            As células de cabeçalho devem ser marcadas com th e as células de dados com td para tornar as tabelas acessíveis. Para tabelas mais complexas, associações explícitas podem ser necessárias usando atributos de escopo, id e cabeçalhos.</p>
            <p class="p3">
            Por que isso é importante?</p>
            <p class="p4">
            Tabelas sem marcação estrutural para diferenciar e vincular adequadamente entre o cabeçalho e as células de dados, criam barreiras de acessibilidade. Depender apenas de dicas visuais não é suficiente para criar uma mesa acessível. Com a marcação estrutural, cabeçalhos e células de dados podem ser determinados programaticamente por software, o que significa que: Pessoas que usam leitores de tela podem ter os cabeçalhos de linha e coluna lidos em voz alta enquanto navegam pela tabela. Os leitores de tela falam uma célula por vez e fazem referência às células de cabeçalho associadas, para que o leitor não perca o contexto.</p>
            <p class="p5">
Algumas pessoas usam formas alternativas de renderizar os dados, por exemplo, usando folhas de estilo personalizadas para exibir células de cabeçalho com mais destaque. Técnicas como essa permitem que eles alterem o tamanho e as cores do texto e exibam as informações como listas em vez de grades. O código da tabela precisa ser estruturado adequadamente para permitir renderizações alternativas.</p>
<p class="p6">
A seguinte tabela de horários de abertura contém informações de cabeçalho na linha superior e na primeira coluna. Todas as células de cabeçalho são marcadas como th células com atributos de escopo adicionados.</p>
<p class="p7">
Na linha do cabeçalho, o valor col para o escopo associa cada célula do cabeçalho às células de dados na coluna. Na coluna do cabeçalho, o valor da linha associa os cabeçalhos individuais às suas linhas. Sem essas informações, alguns usuários não entenderiam facilmente a relação entre o cabeçalho e as células de dados. No exemplo abaixo, os rótulos “Aberto” e “Fechado” só são úteis se puderem ser atribuídos a um determinado dia e hora.</p>
<div class="container text-center">
<div class="row mt-5 mb-5" id="imgs_tabela"> 
<div class="col-12">
                        <img src="./img/tabela/tabela01.webp" class="img-fluid" alt="  Tabela construída de forma acessível, com marcações que definem o título, cabeçalho e corpo da tabela.">
                    </div>
                     </div>
                    </div>
                    </section>
<section class="copy-code">
                <button class="d-block ms-auto" aria-label="Copiar código">
                    <img src="./img/copy.png" alt=" Copiar código" title="Copiar código">
                </button>
  <div>
  <code>   
        &lt;table&gt;
        &lt;caption&gt;Delivery slots:&lt;/caption&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;/td&gt;
            &lt;th scope="col"&gt;Monday&lt;/th&gt;
            &lt;th scope="col"&gt;Tuesday&lt;/th&gt;
            &lt;th scope="col"&gt;Wednesday&lt;/th&gt;
            &lt;th scope="col"&gt;Thursday&lt;/th&gt;
            &lt;th scope="col"&gt;Friday&lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;09:00 - 11:00&lt;/th&gt;
            &lt;td&gt;Closed&lt;/td&gt;
            &lt;td&gt;Open&lt;/td&gt;
            &lt;td&gt;Open&lt;/td&gt;
            &lt;td&gt;Closed&lt;/td&gt;
            &lt;td&gt;Closed&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;11:00 - 13:00&lt;/th&gt;
            &lt;td&gt;Open&lt;/td&gt;
            &lt;td&gt;Open&lt;/td&gt;
            &lt;td&gt;Closed&lt;/td&gt;
            &lt;td&gt;Closed&lt;/td&gt;
            &lt;td&gt;Closed&lt;/td&gt;
        &lt;/tr&gt;
        […]
        &lt;/table&gt;
            </code>
                </div>
                </section>
</article>
<aside class="container">
<div class="row" id="Referência">
        <p class="p1">
        Referência Bibliográfica:
            Web Accessibility Tutorials, 2021. Disponível
            em: https://www.w3.org/WAI/tutorials/tables/. Acesso em: 28 de
            novembro de
            2021.
            </p>
            <p class="p2">
            Tabelas Acessíveis , 2021. Disponível
            em:https://www.gov.br/governodigital/pt-br/acessibilidade-digital/tabelas-acessiveis.pdf. Acesso em: 28 de
            novembro de
            2021.
        </p>
        </div>
</aside>
    </main>
    <?php include './includes/footer.php'; ?>
</body>
</html>