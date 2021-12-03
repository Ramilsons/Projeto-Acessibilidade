<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './includes/bootstrap-css.php'; ?>
    <title>Formulários | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <img src="img/form/banner_form.png" alt="imagem de um formulario sendo preenchido com um lapis">

    <article>
        <h1 id="principal">Trabalhando com Formulários Acessíveis</h1>
        
        <p>O uso de Formulários é a forma mais simples, e a mais comum, para a prestação de
        serviços interativos. Também costuma ser o primeiro obstáculo sério na implementação da
        acessibilidade. Se acessar conteúdos informacionais de um site é uma atitude passiva do
        visitante, o acesso de um formulário exige que o usuário interaja com este. </p>

        <p>
        Formulários costumam ser a principal dificuldade de desenvolvimento na formatação do
        código HTML, pois são ao mesmo tempo formatação e programação. Os usuários devem
        ter acesso às suas informações e poder interagir com elas, fornecendo as informações
        pertinentes para que a execução do serviço tenha sucesso. Para tanto o formulário deve
        ser compreensível, não só visualmente, mas também na sua formatação. 

        </p>
        
        <p>A criação de uma estrutura que respeite as boas práticas de IHC é o primeiro passo para a
        criação de formulários acessíveis. O próximo passo é a adição de elementos que garantam
        a acessibilidade dos formulários. Esses elementos são: LABEL, FIELDSET, LEGEND e
        OPTGROUP </p>
    </article>

    <main>  
       
    

    <section>

        <h2>Tags para a construção de um Formulário</h2>
        <ul>
            <li>FORM: o contêiner do formulário;</li>
            <li> INPUT: que expecifica vários tipos de campos como text, submit, button, radio
            button e checkbox;</li>
            <li>TEXTAREA: campo de texto multi-linha, como observações e comentários;</li>
            <li>SELECT: Utilizado para listas selecionáveis (como um menu); </li>
            <li>BUTTON: Utilizado para botões. </li>
        </ul>
        <p> Dado esses elementos básicos pode-se montar um formulário simples e organizado. O que
        muitos desenvolvedores não sabem é que os navegadores e leitores de texto possuem
        uma ordem de leitura desses elementos e de seus rótulos. Por exemplo, ao encontrar um
        campo <strog><code>&lt;input type="text"...&gt;</code>, os leitores de tela esperam que o rótulo esteja antes do
        campo, mas ao encontrar um <strog><code>&lt;input type="text"...&gt;</code>, o leitor espera encontrar o rótulo depois  
        do campo. </p>

        <p>
        Para facilitar a construção dos formulários, prevendo sua ordem de leitura, existem regras
        de usabilidade visando facilitar a sua interpretação. 
        </p>

    </section>

    <section>

        <h3>Utilização da Label</h3 >
        <p>O elemento LABEL
        O elemento LABEL é utilizado, em conjunto com o atributo “id” para relacionar de forma
        clara o elemento ao seu rótulo.
        O elemento LABEL pode ser usado em conjunto com todos os elementos de formulário,
        exceto o elemento BUTTON. </p>
        <h4>Ex:</h4>
        <p><strog><code>&lt;label for="nome"> Nome: </label> &gt;</code></p>
        <p><strog><code>&lt;input type="text" name="nome" id="nome"/>  &gt;</code></p>
        <b><p>Os elementos FIELDSET e LEGEND</p></b>
        <p>O elemento FIELDSET é utilizado para agrupar os itens de formulários com características
        em comum. Por exemplo, um formulário para inscrição em boletim pode ter seus
        elementos agrupados da seguinte forma: 
        </p>
        <ul>
            <li>Dados de identificação: Nome, sobrenome, endereço físico, endereço de email;</li>
            <li>Preferências de recebimento: periodicidade (diária, semanal, mensal) e tipo de
            boletim (html, texto plano);</li>
            <li>Artigos de seu interesse: Lista de itens que podem constar no boletim. </li>
        </ul>
        <p>O elemento FIELDSET é utilizado em conjunto com o elemento LEGEND, que melhora a
        acessibilidade do elemento FIELDSET quando este não é visível em navegadores gráficos. </p>

        <b><p>Ex:</p></b>
        <div class="exemplo">
        <strog><code>&lt;ifieldset> &gt;</code>
        <strog><code>&lt;input type="checkbox" name="chk0" id="chk0_0" value="vermelho">&gt;</code>
        <strog><code>&lt;label for="chk0_0">vermelho</label><br /> &gt;</code>
        <strog><code>&lt;input type="checkbox" name="chk1" id="chk1_1" value="verde">&gt;</code>
        <strog><code>&lt;label for="chk1_1">verde</label><br />&gt;</code>
        <strog><code>&lt;input type="checkbox" name="chk2" id="chk2_2" value=" azul"> &gt;</code>
        <strog><code>&lt;label for="chk2_2">azul</label><br /> &gt;</code>
        <strog><code>&lt;input type="checkbox" name="chk3" id="chk3_3" value="amarelo"> &gt;</code>
        <strog><code>&lt;label for="chk3_3">amarelo</label> &gt;</code>
        <strog><code>&lt;/fieldset>&gt;</code>

        </div>

        <h4> O elemento OPTGROUP </h4>

        <p>O elemento OPTGROUP trabalha de forma semelhante ao FIELDSET, agrupando itens do
        elemento SELECT quando necessário. Cada elemento OPTGROUP recebe um atributo
        “label” que é o nome do grupo criado. </p>
        
        <div class="exemplo">
    
        <strog><code>&lt;select name="Lista de mercado"> &gt;</code>
        <b><strog><code>&lt;optgroup label="Laticínios"> </label><br /> &gt;</code></b>
        <strog><code>&lt;option>leite desnatado</option> &gt;</code>
        <strog><code>&lt;option>queijo ralado</option> </label><br />&gt;</code>
        <strog><code>&lt;option>queijo prato</option> &gt;</code>
        <strog><code>&lt;option>requeijão</option> </label><br /> &gt;</code>
        <b><strog><code>&lt;/optgroup> &gt;</code></b>
        <b><strog><code>&lt;optgroup label="Vegetais"> </label> &gt;</code></b>
        <strog><code>&lt;option>alface</option> &gt;</code>
        <strog><code>&lt;option>alho</option>&gt;</code>
        <strog><code>&lt;option>Beringela</option> &gt;</code>
        <strog><code>&lt;option>Cenoura</option></label><br /> &gt;</code>
        <strog><code>&lt;option>Pimentão</option>&gt;</code>
        <b><strog><code>&lt;/optgroup> </label><br />&gt;</code></b>
        <b><strog><code>&lt;optgroup label="Frutas"> &gt;</code></b>
        <strog><code>&lt;option>Abacaxi</option> </label><br /> &gt;</code>
        <strog><code>&lt;option>Banana</option> &gt;</code>
        <strog><code>&lt;option>Manga</option> </label> &gt;</code>
        <b><strog><code>&lt;/optgroup></option> &gt;</code></b>
        <strog><code>&lt;/select></option> &gt;</code>

        </div>


        
    </section>

    <section>
        <h4>Teclas de atalho (Accesskeys) </h4>

        <p>O uso de teclas de atalho através do atributo “accesskey”, permite escolher um atalho de
        teclado para cada um dos campos do formulário, possibilitando o acesso rápido. O
        atributo pode ser aplicado tanto ao elemento LABEL como ao elemento INPUT. </p>
        <b><p>Ex: tecla de atalho para a busca </p></b>
        <div class="exemplo">
        <strog><code>&lt;input type="text" name="txtbusca" accesskey="s" /></option> &gt;</code>
        </div>

        <p>No exemplo, se o usuário pressionar as teclas “alt” e “S” ele irá diretamente para o campo
        de busca. </p>
        <p>No entanto, deve-se tomar cuidado com a escolha das teclas de atalho, pois diversos
        navegadores utilizam-se delas para sua própria navegação, variando do navegador,
        versão e língua. Em caso de conflito, a preferência é do navegador. </p>

    </section>

    <section>
        <h4>O uso de Scripts</h4>
        <p>Um formulário deve funcionar independentemente dos scripts estarem habilitados no
        navegador ou no leitor de tela. </p>
        <p>Valide sempre a manipulação de dados no lado do servidor. Isso possibilita o
        funcionamento de formulários independentemente de scripts no lado do usuário. </p>

        <p><b>Prefira</b>Validação pelo Servidor</p>
        <div class="exemplo">
        <strog><code>&lt;input type="submit" value="Comprar" /> </option> &gt;</code>

        <p><b>Do que:</b>Validação por Script</p>
        <div class="exemplo">
        <strog><code>&lt;input type="button" value=" Comprar"
        onclick="document.forms('main'.submit();" /></option> &gt;</code>
        </div>

        <h4>Menu Javascript (menus drop-down)</h4>
        <p>Menus estilo drop-down, que utilizam o elemento SELECT com javascript, costumam ser
        inacessíveis a usuários que utilizam leitores de tela ou apenas o teclado para navegar. </p>

        <p>Nesses casos é preferível usar a lista (elemento SELECT) junto a um botão de ação, que
        permita o usuário ativar sua seleção. </p>

    </section>

    <section>
        <h4>Mensagens de erro amigáveis</h4>
        <p>Muitas vezes o usuário desiste de preencher um formulário por não conseguir entender as
        mensagens de erro. Salvo algumas exceções, a culpa é, em geral, do mau uso e
        formatação das mensagens de erro em formulários.</p>

        <p>Existem vários scripts do lado do usuário que detectam e tratam erros de preenchimento,
        mas, como visto anteriormente, o uso de scripts do lado do usuário é muitas vezes
        inacessível e não recomendado. </p>
        
        <h5>Mensagens de erros no lado do SERVIDOR</h5>
        <p>Uma vez enviado o formulário e encontrado erros de preenchimento, a forma usual é
        apresentar no topo da página um sumário dos erros encontrados, destacando os locais
        onde encontrados os erros. Esse método costuma ser eficaz visualmente, mas costuma
        causar confusão nos leitores de tela, pois geralmente o nome da página de retorno é o
        mesmo. O problema se resolve colocando um alerta no elemento TITLE da página,
        repetindo o mesmo alerta no cabeçalho de conteúdo da página.</p>
        <p>EX:</p>
        <div class="exemplo">
        <p> <strog><code>&lt;title> Alguns dados estão incorretos ou faltando no formulário. Por favor, corrija.</option> &gt;</code> 
        <strog><code>&lt;/title></option> &gt;</code> </p>
        </div>

        <p>Outra forma, mais amigável é capturar os dados preenchidos corretamente e retornar ao
        usuário somente os campos com erros para correção. </p>

    </section>

    <section>

    <h5>Conteúdo retirado de:</h5>
    <p>Accessible HTML/XHTML Forms: Beginner Level</p>
    <p>https://www.webstandards.org/learn/tutorials/accessible-forms/beginner/</p>
    <p>Construindo formulários HTML/XHTML acessíveis - 1a. Parte </p>
    <p>https://www.maujor.com/tutorial/formac-a.php</p>
    <p>HTML 4.01 Specification - Forms </p>
    <p>https://www.w3.org/TR/html4/interact/forms.html</p>
    </section>

    <?php include './includes/footer.php'; ?>
</body>

</html>