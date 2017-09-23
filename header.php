<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plan B</title>
    <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body>

<header class="header">
    <div>

        <nav uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;" class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            
            <div class="uk-navbar-left uk-margin-left">
                
                <a class="uk-navbar-item uk-logo uk-cover-container" href="#">
                    <img src="<?php bloginfo('template_url')?>/images/21244656_861780077314641_593729245_n.png" alt="Plan B">
                </a>
    
            </div>


            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-text-center" uk-scrollspy-nav="closest: li; scroll: true; offset: 100">
                    <li class=""><a href="#inicio">Inicio</a></li>
                    <li class=""><a href="#quienes">¿Quienes somos?</a></li>
                    <li class=""><a href="#servicios">Servicios</a></li>
                    <li><a href="#modulos">Módulos</a></li>
                    <li class=""><a href="#formacion">Formación</a></li>
                    <li class=""><a href="#contacto">contacto</a></li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="header-title" id="inicio">
        Centro de Inovación Financiera y de Negociación
    </div>
</header>