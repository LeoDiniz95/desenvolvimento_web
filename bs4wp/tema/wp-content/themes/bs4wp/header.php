<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?> >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
      
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>

  </head>
  <body>

    <div class="container">

        <!--  Linha de Título  -->
        <div class="row my-5 align-items-center">

          <!--  TÍTULO  -->
          <div class="col-md-8 col-sm-12">
            <h1>Tema</h1>
            <p class="lead">com Wordpress</p>
          </div>

          <!--  Pesquisa  -->
          <div class="col-md-4 col-sm-12">

            <form>

              <div class="input-group">

                <input type="text" class="form-control" placeholder="Procura algo?">
                <div class="input-group-append">
                  <button class="btn btn-my-color-2" type="button">Buscar</button>
                </div>
              </div>

            </form>

          </div>

        </div><!--  Fim da Linha de Título  -->

        <!--  Linha de Menu  -->
        <div class="row">

          <div class="col mb-5">

            <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-1 rounded">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meuNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="meuNavbar">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="">Início</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="">Perfil</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="">Projetos</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="">Notícias</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="">Objetivos</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="">Contatos</a>
                  </li>

                </ul>
              </div>

            </nav>

          </div>
          
        </div><!--  Fim da Linha de Menu  -->