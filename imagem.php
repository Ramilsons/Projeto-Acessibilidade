<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <title>Imagem | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main>
        <section> 
           <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
              <h1 class="display-4">Trabalhando com Imagens </h1>
            </div>
          </div>  
        </section>
        <article>            
          <section class="card">
            <header class="card-header" id="construção_de_uma_boa_descrição">
                <h2>Tópicos 1</h2>
                <button aria-label="Exibir Conteúdo" class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <img src="" alt="">
                </button>
              
            </header>
        
            <section id="collapseOne" class="collapse show" aria-labelledby="construção_de_uma_boa_descrição" data-parent="#trabalhando_com_imagens">
              <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit eros, pretium a
                  elementum vitae, scelerisque ac augue. Curabitur at euismod eros. Vestibulum diam
                  libero, posuere non luctus commodo, tincidunt nec lectus. Integer consectetur ipsum vel
                  nunc fringilla, vel pulvinar est ullamcorper. Proin in nibh et mi accumsan imperdiet.
                  Pellentesque et libero auctor, tempus arcu eget, venenatis massa. Phasellus eget lectus
                  enim. Etiam dui lectus, tincidunt at sem ac, semper dapibus sapien. Sed dolor quam,
                  rutrum in vestibulum non, ullamcorper quis sem. Integer ligula orci, convallis et
                  placerat at, posuere nec dolor. Pellentesque porta gravida tortor non eleifend. Aenean
                  gravida nisi vel tempus rhoncus. Proin orci justo, luctus vel nisl eget, porttitor
                  vestibulum magna. Aliquam consectetur fringilla varius. Aliquam sed fringilla sem.
              </div>
            </section>
          </section>
          <section class="card">
            <header class="card-header" id="Atributos_importantes">
                <h2>Tópicos 2</h2>
                <button aria-label="Exibir Conteúdo" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <img src="" alt="">
                </button>
              
            </header>
            <section id="collapseTwo" class="collapse" aria-labelledby="Atributos_importantes" data-parent="#trabalhando_com_imagens">
              <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit eros, pretium a
                  elementum vitae, scelerisque ac augue. Curabitur at euismod eros. Vestibulum diam
                  libero, posuere non luctus commodo, tincidunt nec lectus. Integer consectetur ipsum vel
                  nunc fringilla, vel pulvinar est ullamcorper. Proin in nibh et mi accumsan imperdiet.
                  Pellentesque et libero auctor, tempus arcu eget, venenatis massa. Phasellus eget lectus
                  enim. Etiam dui lectus, tincidunt at sem ac, semper dapibus sapien. Sed dolor quam,
                  rutrum in vestibulum non, ullamcorper quis sem. Integer ligula orci, convallis et
                  placerat at, posuere nec dolor. Pellentesque porta gravida tortor non eleifend. Aenean
                  gravida nisi vel tempus rhoncus. Proin orci justo, luctus vel nisl eget, porttitor
                  vestibulum magna. Aliquam consectetur fringilla varius. Aliquam sed fringilla sem.
              </div>
            </section>
          </section>
          <section class="card">
            <header class="card-header" id="headingThree">
                <h2>Tópicos 3</h2>
                <button aria-label="Exibir Conteúdo" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <img src="" alt="">
                </button>
              
            </header>
            <section id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#trabalhando_com_imagens">
              <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit eros, pretium a
                  elementum vitae, scelerisque ac augue. Curabitur at euismod eros. Vestibulum diam
                  libero, posuere non luctus commodo, tincidunt nec lectus. Integer consectetur ipsum vel
                  nunc fringilla, vel pulvinar est ullamcorper. Proin in nibh et mi accumsan imperdiet.
                  Pellentesque et libero auctor, tempus arcu eget, venenatis massa. Phasellus eget lectus
                  enim. Etiam dui lectus, tincidunt at sem ac, semper dapibus sapien. Sed dolor quam,
                  rutrum in vestibulum non, ullamcorper quis sem. Integer ligula orci, convallis et
                  placerat at, posuere nec dolor. Pellentesque porta gravida tortor non eleifend. Aenean
                  gravida nisi vel tempus rhoncus. Proin orci justo, luctus vel nisl eget, porttitor
                  vestibulum magna. Aliquam consectetur fringilla varius. Aliquam sed fringilla sem.
              </div>
            </section>
          </section>
        </article>
    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>