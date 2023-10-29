<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>
    <div class="row">
        <div class="col-md-8 hero" style="background-image:url(<?php echo get_post_meta(get_the_id(), 'makeup_homepage_imagen_hero', true);?>)"></div>
        
        <div class="col-md-4 bg-hero p-5 d-flex flex-column justify-content-center">
            <div class="mb-4">
            <?php echo get_post_meta(get_the_id(), 'makeup_homepage_texto_hero', true);?>
            </div>

            <?php $nosotros = get_page_by_title('Nosotros');?>
            <a class="btn bg-categorias text-dark fs-3 fw-bold text-uppercase py-3" href="<?php echo get_permalink($nosotros->ID); ?>">Conocenos</a>
        </div>
    </div>

    <section class="bg-seccion">
        <main class="container-xl py-5">
        <h2 class="text-center my-5">Conoce nuestros productos</h2>
        
        <div class="row g-0 pt-5 mb-4">
            <div class="col-md-8 producto">
                <img class="img-fluid" src="<?php echo get_post_meta(get_the_id(), 'makeup_homepage_imagen_descripcion_1', true);?>" alt="imagen">
            </div>
            <div class="col-md-4 bg-productos text-center p-5 text-dark d-flex flex-column justify-content-center">
                <?php echo get_post_meta(get_the_id(), 'makeup_homepage_texto_descripcion_1', true);?>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img class="img-fluid" src="<?php echo get_post_meta(get_the_id(), 'makeup_homepage_imagen_descripcion_2', true);?>" alt="imagen">

                    <div class="card-body text-center bg-productos text-dark p-5">
                        <?php echo get_post_meta(get_the_id(), 'makeup_homepage_texto_descripcion_2', true);?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                <img class="img-fluid" src="<?php echo get_post_meta(get_the_id(), 'makeup_homepage_imagen_descripcion_3', true);?>" alt="imagen">

                    <div class="card-body text-center bg-productos text-dark p-5">
                        <?php echo get_post_meta(get_the_id(), 'makeup_homepage_texto_descripcion_3', true);?>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="img-fluid" src="img/producto4.jpg" alt="imagen producto">

                    <div class="card-body text-center bg-productos text-dark p-5">
                        <h3>Producto 4</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, magnam recusandae ratione placeat ipsam sint.</p>
                        <p class="fs-1 fw-bold">$300</p>
                        <a class="btn btn-light fs-3 fw-bold text-uppercase py-3 d-block" href="#">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="img-fluid" src="img/producto5.jpg" alt="imagen producto">

                    <div class="card-body text-center bg-productos text-dark p-5">
                        <h3>Producto 5</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, magnam recusandae ratione placeat ipsam sint.</p>
                        <p class="fs-1 fw-bold">$300</p>
                        <a class="btn btn-light fs-3 fw-bold text-uppercase py-3 d-block" href="#">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="img-fluid" src="img/producto6.jpg" alt="imagen producto">

                    <div class="card-body text-center bg-productos text-dark p-5">
                        <h3>Producto 6</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, magnam recusandae ratione placeat ipsam sint.</p>
                        <p class="fs-1 fw-bold">$300</p>
                        <a class="btn btn-light fs-3 fw-bold text-uppercase py-3 d-block" href="#">Ver más</a>
                    </div>
                </div>
            </div>
        </div> -->
        </main>
    </section>

    <section class="productos mt-5 py-5">
        <h1 class="text-center mb-5">Productos</h1>

        <div class="container justify-content-center">

            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12
                );  
            ?>
            <?php 
            $products = wc_get_products($args);

            global $post;
            $columns = wc_get_loop_prop( 'columns' );
            ?>
            <div class="woocommerce columns-<?php echo esc_attr( $columns ); ?>">
            <?php
                woocommerce_product_loop_start();
                foreach ($products as $product) {
                    $post = get_post($product->get_id());
                    setup_postdata($post);
                    wc_get_template_part('content', 'product');
                }
                wp_reset_postdata();
                woocommerce_product_loop_end();
            ?>

            </div>
        </div>
    </section>


    <section class="bg-seccion">
        <div class="container-xl">
            <h2 class="text-center py-5">
                <?php echo get_post_meta(get_the_id(), 'makeup_homepage_titulo_categoria', true);?>
            </h2>

            <div class="row py-5">
                <div class="col-md-4 mb-4 categoria">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_post_meta(get_the_id(), 'makeup_homepage_imagen_categoria_1', true);?>" alt="imagen categoria">               
                    </div>
                    <a class="bg-categorias text-dark fs-2 fw-bold text-decoration-none text-center d-block py-3" href="#"><?php echo get_post_meta(get_the_id(), 'makeup_homepage_texto_categoria_1', true);?></a>
                </div>
                <div class="col-md-4 mb-4 categoria">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_post_meta(get_the_id(), 'makeup_homepage_imagen_categoria_2', true);?>" alt="imagen categoria">
                    </div>

                    <a class="bg-categorias text-dark fs-2 fw-bold text-decoration-none text-center d-block py-3" href="#"><?php echo get_post_meta(get_the_id(), 'makeup_homepage_texto_categoria_2', true);?></a>
                </div>
                <div class="col-md-4 mb-4 categoria">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_post_meta(get_the_id(), 'makeup_homepage_imagen_categoria_3', true);?>" alt="imagen categoria">
                    </div>

                    <a class="bg-categorias text-dark fs-2 fw-bold text-decoration-none text-center d-block py-3" href="#"><?php echo get_post_meta(get_the_id(), 'makeup_homepage_texto_categoria_3', true);?></a>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>

<?php get_footer(); ?>