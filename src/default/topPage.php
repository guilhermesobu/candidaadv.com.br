<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon4.ico" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/scss/index.css">
</head>

<body>

    <!-- top content -->
    <div class="container-fluid p-0 m-0 d-lg-block d-none">
        <div class="row align-items-center">
            <div class="col-3 text-center">
                <img class="mx-auto d-block py-1" src="/src/img/ncl.png">
            </div>
            <div class="col text-center">
                <img class="mx-auto d-block py-1" src="/src/img/logo4.png">
            </div>
            <div class="col-3">
                <?php require './src/default/socialMedia.php'; ?>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="rounded-0 navbar navbar-expand-lg navbar-dark bg-wine sticky-top border-bottom" id="navbarid">

        <button class="navbar-toggler my-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="/src/img/logo.png" class="rounded d-block d-lg-none" style="height: 50px;">

        <div class="col collapse navbar-collapse justify-content-lg-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item border-left">
                    <a class="nav-link text-white" href="#home">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link text-white" href="#aboutme">Sobre mim
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link text-white" href="#ocupationarea">Áreas de Atuação
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link text-white" href="#accessory">Assessoria e Consultoria Jurídica
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link text-white" href="#network">Redes Sociais
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item border-left">
                    <a class="nav-link text-white" href="#contact">Contato
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="border-left d-lg-block d-none"></li>

            </ul>
        </div>
    </nav>

    <!--    
        Home, Escritório, Profissionais, Área de Atuação,   Contato, Localização, Redes Sociais, Área do Cliente
        
        Home, Sobre mim, Áreas de Atuação, Acessoria/Consultori jurídica, Redes Sociais, Contato
    -->