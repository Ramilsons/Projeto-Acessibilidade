<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="./css/paginas/checagem.css">
    <title>Checagem | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main class="container position-relative">
        <article>
            <section>
                <h1 id="principal">Metodos de Checagem</h1>
                <p>Quando vamos desenvolver um site acessível, devemos pensar não somente nas pessoas com deficiência como público alvo. A ideia de acessibilidade tem como propósito facilitar a navegação de todos que acessarem o projeto, desde pessoas com baixa visão, autistas, baixa audição, idosos, dificuldades físicas ou motoras e entre outros.</p>
                <p>Com isso em mente, temos uma lista de quais recursos devemos utilizar:</p>
            </section>

            <section>
                <h2>Recursos Utilizados</h2>

                <p>Lista de Recursos para auxiliar na criação de um Site Acessivel:</p>

                <ul>
                    <li>Adicionar "Alt Text" atribuído as tags de imagens, com intuito de ser uma descrição simples e detalhada sobre o conteúdo da imagem</li>
                    <li>Usar títulos/cabeçalhos coerentes com o conteúdo no qual ele se referencia </li>
                    <li>Adaptar as suas formas aos leitores de tela</li>
                    <li>Colocar a opção "Ir para o conteúdo principal" no topo de cada página.</li>
                    <li>Tornar todo o conteúdo navegável através do teclado.</li>
                    <li>Tamanho de letra - uso adequado do tamanho da letra que pode variar em função da fonte escolhida - 10 costuma ser o mínimo recomendável.</li>
                    <li>Assegurar que os usuários que usam teclados podem identificar visualmente um link focalizado - usar uma linha pontilhada ou outros indicadores sem cor.</li>
                    <li>Garantir que o Texto dos Links faz sentido por si só - evite "Clique Aqui" ou outras referências ambíguas como "Mais" ou "Continuar" que podem ser confusas.</li>
                    <li>Evitar o uso de conteúdo com muita oscilação de luz ou efeitos de estrobo, pois pode causar algum tipo de ataque (em pessoas epilépticas, por exemplo).</li>
                </ul>

            </section>

            <section>
                <h3>Funcionamento do NVDA</h3>
                <p>O NVDA (NonVisual Desktop Access) é um "leitor de tela" gratuito que permite a pessoas cegas e com deficiência visual a leitura de textos na tela do computador por meio de uma voz computadorizada. O NVDA (NonVisual Desktop Access) é um "leitor de tela" gratuito que permite a pessoas cegas e com deficiência visual a leitura de textos na tela do computador por meio de uma voz computadorizada. Você pode controlar o que é lido para você, movendo o cursor para a área relevante de texto com um mouse ou as setas em seu teclado. O NVDA também funciona com o Microsoft Windows. O usuário pode converter o texto em braille se o usuário do computador possui um dispositivo chamado "exibição braille".</p>
            </section>
        </article>
        <aside class="position-fixed checklist active">
            <button aria-label="Clique para fechar o checklist">
                <img src="./img/menu/seta.png" alt="Clique para fechar ou abrir o checklist">
            </button>
            <div class="conteudo">
                <h3>confira se você já fez os seguintes passos:</h3>
                <div class="box-selecionar">
                    <input type="checkbox" id="check1" name="check1"  aria-label="Planejamento. Use o espaço para interagir com a caixa de seleção">
                    <label for="check1">Planejamento</label>
                </div>
                <div class="box-selecionar">
                    <input type="checkbox" id="check2" name="check2"  aria-label="Descrição de Imagens. Use o espaço para interagir com a caixa de seleção">
                    <label for="check2">Descrição de Imagens</label>
                </div>
                <div class="box-selecionar">
                    <input type="checkbox" id="check3" name="check3" aria-label="Teste no NVDA. Use o espaço para interagir com a caixa de seleção">
                    <label for="check3">Teste no NVDA</label>
                </div>
            </div>
        </aside>
    </main>

    <?php include './includes/footer.php'; ?>
    <script src="./js/checagem.js"></script>
</body>

</html>