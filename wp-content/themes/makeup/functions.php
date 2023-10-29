<?php
// Agregar CMB2

require_once dirname(__FILE__) . '/cmb2.php';

// Carga campos personalizados
require_once dirname(__FILE__) . '/inc/custom-fields.php';

// Opciones del Theme
require_once dirname(__FILE__) . '/inc/opciones.php';

//Imagenes destacadas para paginas
add_action('init', 'makeup_imagen_destacada');
function makeup_imagen_destacada($id) {
    $imagen = get_the_post_thumbnail_url( $id, 'full' );

    $html = '';
    $clase = false;
    if($imagen) {
        $clase = true;
        $html .= '<div class="col-md-6">';
        $html .=    '<div class="img-fluid imagen-destacada"></div>';
        $html .= '</div>';

        // Agregar estilos linealmente
        wp_register_style( 'custom', false);
        wp_enqueue_style('custom');

        // Crear el css para el custom
        $imagen_destacada_css = "
            .imagen-destacada {
                background-image: url( {$imagen} );
            }
        ";
        wp_add_inline_style('custom', $imagen_destacada_css );
    }
    return array($html, $clase);
}

// Funciones que se cargan al activar el tema
function makeup_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    //Menu de navegación
    register_nav_menus( array(
        'menu_principal' => esc_html__('Menu Principal', 'makeup'),
        'menu_enlaces' => esc_html__('Menu Enlaces Rapidos', 'makeup'),
        'menu_tienda' => esc_html__('Menu Tienda', 'makeup'),
    ));
}
add_action('after_setup_theme', 'makeup_setup');

// Support for woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}   

// Agregar nav-link al menu principal
function makeup_enlace_class_menu_principal($atts, $item, $args) {
    if($args->theme_location == 'menu_principal') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'makeup_enlace_class_menu_principal', 10, 3);

// Agregar nav-link al menu enlaces rapidos
function makeup_enlace_class_menu_enlaces($atts, $item, $args) {
    if($args->theme_location == 'menu_enlaces') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'makeup_enlace_class_menu_enlaces', 10, 3);

// Agregar nav-link al menu enlaces tienda
function makeup_enlace_class_menu_tienda($atts, $item, $args) {
    if($args->theme_location == 'menu_tienda') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'makeup_enlace_class_menu_tienda', 10, 3);


// Scripts y Stylesheet
function makeup_scripts() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '5.3');

    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('app'), '5.3', true );
}
add_action('wp_enqueue_scripts', 'makeup_scripts');

//Sobreescribir estilos Woocommerce
function woocommerce_template_loop_product_title() {
    echo '<h3 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title', 'bg-hero' ) ) . '">' . get_the_title() . '</h3>'; 
 }