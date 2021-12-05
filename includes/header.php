<header>
    <!-- Esse link deverá aparecer quando o usuário apertar tab pela primeira vez na página-->
    <a href="#principal" class="visually-hidden-focusable" id="link-conteudo">Ir para o conteúdo principal</a>
    
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Botão de menu aparecerá apenas para tablet e mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Clique para abrir/fechar o menu de navegação">
                <img src="./img/menu.svg" alt="Três barras horrizontais, uma abaixo da outra. Representa o ícone de menu">
            </button>
            <div class="collapse navbar-collapse justify-content-lg-center " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ps-lg-3">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? "active" : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ps-lg-3">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contato.php') ? "active" : ''; ?>" href="contato.php">Quem Somos</a>
                    </li>
                    <li class="nav-item ps-lg-3">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'design.php') ? "active" : ''; ?>" href="design.php">Design</a>
                    </li>
                    <li class="nav-item ps-lg-3">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'checagem.php') ? "active" : ''; ?>" href="checagem.php">Checagem</a>
                    </li>
                    <li>
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'principais_falhas.php') ? "active" : ''; ?>" href="principais_falhas.php">Principais Falhas</a>
                    </li> 
                    <li class="nav-item dropdown ps-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Componentes</a>
                    <ul class="dropdown-menu" id="dropdown" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item <?php echo (basename($_SERVER['PHP_SELF']) == 'formulario.php') ? "active" : ''; ?>" tabindex="0"  href="formulario.php">Formulário</a></li>
                            <li><a class="dropdown-item <?php echo (basename($_SERVER['PHP_SELF']) == 'imagem.php') ? "active" : ''; ?>" tabindex="0" href="imagem.php">Imagem</a></li>    
                            <li><a class="dropdown-item <?php echo (basename($_SERVER['PHP_SELF']) == 'tabelas.php') ? "active" : ''; ?>" tabindex="0" href="tabelas.php">Tabelas</a></li>
                            <li><a class="dropdown-item <?php echo (basename($_SERVER['PHP_SELF']) == 'menu.php') ? "active" : ''; ?>" tabindex="0" href="menu.php">Menu</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Exibir Menu">
        <img src="" alt="Menu">
    </button>

    <nav id="navbarSupportedContent">
        <ul class="nav d-flex justify-content-center row">
            <li class="nav-item col-12 col-sm-2"><a class="nav-link active" aria-current="page" href="index.php">Página 1</a></li>
            <li class="nav-item col-12 col-sm-2"><a class="nav-link" href="design.php">Página 2</a></li>
            <li class="nav-item col-12 col-sm-2"><a class="nav-link" href="principais_falhas.php">Página 3</a></li>
            <li class="nav-item col-12 col-sm-2"><a class="nav-link" href="contato.php">Página 4</a></li>
            <li class="nav-item col-12 col-sm-2"><a class="nav-link" href="menu.php">Página 5</a></li>
        </ul>
    </nav> -->
</header>