<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <?php wp_head(  ); ?>
</head>
<body <?php body_class(); ?>>

    <header class="py-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="<?php echo esc_url( home_url('/')); ?>">
                    <?php 
                        $opciones = get_option('makeup_theme_options');
                        if(isset($opciones['logotipo'])): ?>
                            <img class="img-fluid" src="<?php echo $opciones['logotipo']; ?>" alt="Logo">
                        <?php else: ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                        <?php endif;
                    ?>
                </a>
            </div>
        </div>
    </header>

    <div class="border-top border-bottom py-4">
        <div class="navbar navbar-expand-lg container navbar-light">
            <a class="navbar-left nombre-sitio d-lg-none fs-2 fw-bold text-decoration-none text-uppercase" href="<?php echo esc_url( home_url('/')); ?>">
            <?php echo $opciones['nombre_sitio']; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacion">
                <span class="navbar-toggler-icon"></span>
            </button>

                <!-- Menu principal-->
                <?php
                    $args = array(
                        'menu_class' => 'nav nav-justified container d-flex flex-column flex-md-row text-center justify-content-md-between',
                        'container_id' => 'navegacion',
                        'container_class' => 'collapse navbar-collapse text-dark text-decoration-none justify-content-md-between',
                        'theme_location' => 'menu_principal'
                    );
                    wp_nav_menu($args);
                ?>
                <!--FIN Menu principal-->

            </div>
        </div>
    </div>