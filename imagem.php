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
        <p>
  <a class="btn btn-dark " data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Tópico 1</a>
  <button class="btn btn-dark " type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Tópico 2</button>
  <button class="btn btn-dark " type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Fechar</button>
</p>
<div class="row">
  <div class="col ">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      </div>
    </div>
  </div>
</div>
        </article>
    </main>

    <?php include './includes/footer.php'; ?>
</body>

</html>