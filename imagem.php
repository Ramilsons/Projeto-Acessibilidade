<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

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
            <div class="accordion" id="trabalhando_com_imagens">
                <div class="card">
                  <div class="card-header" id="construção_de_uma_boa_descrição">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Tópicos 1
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="construção_de_uma_boa_descrição" data-parent="#trabalhando_com_imagens">
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
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="Atributos_importantes">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Tópicos 2
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="Atributos_importantes" data-parent="#trabalhando_com_imagens">
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
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Tópicos 3
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#trabalhando_com_imagens">
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
                  </div>
                </div>
              </div>
        </article>
    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>