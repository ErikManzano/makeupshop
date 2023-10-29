<?php get_header(); ?>
    
    <main class="container-xl py-5 <?php echo $html[1] ? 'col-md-8 destacada' : 'col-md-12 no-destacada'; ?>">
        <div class="row py-5 justify-content-center">
            <div class="row align-items-center g-5">
                <div class="col-md-6 mb-5 img-fluid">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="404" class="img-fluid imagen-404">
                </div>

                <div class="col-md-6">
                    <h2><span>Oops!!</span> Contenido no encontrado</h2>
                        <p>Selecciona:</p>
                        <a href="<?php echo esc_url(home_url('/')); ?>"><button class="btn bg-hero fw-bold fs-2">Volver al inicio</button></a> 
                        <?php $contacto = get_page_by_title('Contacto'); ?>
                        <a href="<?php echo get_permalink($contacto->ID) ?>"><button class="btn bg-hero fw-bold fs-2">Envia un mensaje</button></a>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?> 