<footer class="border-top pt-5">
       <div class="container-xl">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0 text-center">
                    <h3 class="mb-4">Enlaces rapidos</h3>
                        <!-- Menu Enlaces rapidos-->
                            <?php
                                $args = array(
                                    'menu_class' => 'nav nav-justified d-flex flex-column',
                                    'container_id' => 'navegacion',
                                    'container_class' => 'text-dark text-decoration-none ',
                                    'theme_location' => 'menu_enlaces'
                                );
                                wp_nav_menu($args);
                            ?>
                        <!-- FIN  Menu Enlaces rapidos-->
                </div>
                <div class="col-md-6 mb-4 mb-md-0 text-center">
                    <h3 class="mb-4">Tienda</h3>            
                        <!-- Menu Tienda-->
                            <?php
                                $args = array(
                                    'menu_class' => 'nav nav-justified d-flex flex-column',
                                    'container_id' => 'navegacion',
                                    'container_class' => 'text-dark text-decoration-none',
                                    'theme_location' => 'menu_tienda'
                                );
                                wp_nav_menu($args);
                            ?>
                        <!-- FIN  Menu Tienda -->
                </div>
            </div>
       </div>

       <div class="mt-5 bg-seccion">
                <p class="p-3 text-center fs-2">
                    Todos los derechos reservados.
                    <?php echo "<br>"; ?>
                    <?php echo get_bloginfo( 'blogname'); ?> &copy;
                    <?php echo date('Y');  ?> </p>                    
        </div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>