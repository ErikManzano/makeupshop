<?php
add_action( 'cmb2_admin_init', 'makeup_opciones_theme' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function makeup_opciones_theme() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box( array(
		'id'           => 'makeup_theme_opciones',
		'title'        => esc_html__( 'Ajustes Theme Makeup', 'cmb2' ),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key'      => 'makeup_theme_options', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-admin-customizer', // Menu icon. Only applicable if 'parent_slug' is left empty.
		
	) );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Color primario del sitio', 'cmb2' ),
		'desc'    => esc_html__( 'Añada un color primario para el sitio web', 'cmb2' ),
		'id'      => 'color_primario',
		'type'    => 'colorpicker',
		'default' => '#ffffff',
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Color secundario del sitio', 'cmb2' ),
		'desc'    => esc_html__( 'Añada un color secundario para el sitio web', 'cmb2' ),
		'id'      => 'color_secundario',
		'type'    => 'colorpicker',
		'default' => '#ffffff',
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Color de fondo para las secciones', 'cmb2' ),
		'desc'    => esc_html__( 'Añada un color de fondo para las secciones (productos, categorias, nosotros, contacto y footer) del sitio', 'cmb2' ),
		'id'      => 'color_secciones',
		'type'    => 'colorpicker',
		'default' => '#ffffff',
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Logotipo', 'cmb2' ),
		'desc'    => esc_html__( 'Cargue una imagen para el logotipo', 'cmb2' ),
		'id'      => 'logotipo',
		'type'    => 'file',
	) );
    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Nombre del sitio para el menú principal', 'cmb2' ),
		'desc'    => esc_html__( 'Escribe el nombre del sitio para que se muestre junto al menu principal', 'cmb2' ),
		'id'      => 'nombre_sitio',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 1,
		),
	) );
}

add_action( 'wp_footer', 'makeup_estilos_opciones');
function makeup_estilos_opciones() {
    $opciones = get_option('makeup_theme_options');

    $color_primario = $opciones['color_primario'];
    $color_secundario = $opciones['color_secundario'];
    $color_secciones = $opciones['color_secciones'];

    wp_register_style( 'custom-opciones', false);
    wp_enqueue_style( 'custom-opciones' );

    $custom_css = "
        /** Bg color primario **/
        .btn-primary,
        .bg-primary,
        .bg-hero,
        .badge,
        .badge-secondary,
        .bg-productos,
        .alert-primary,
        .list-group-item-primary,
        .comment-respond .submit {
            background-color: {$color_primario}!important;
        }

        /** Color primario **/
        .nombre-sitio,
        .card-subtitle,
        .contenido-entrada .meta span,
        .entrada a ,
        .instructor,
        .comment-respond a,
        .comentarios-cerrados {
            color:  {$color_primario}!important;
        }

        /** border   primario **/
        .current_page_item .nav-link,
        blockquote.subtitulo,
        .btn-primary,
        .footer  {
            border-color:  {$color_primario}!important;
        }

        /** Navbar secciones **/
        .nav-link:hover,
        .current_page_item .nav-link {
            color:  {$color_secundario}!important;
        }
        
        /** Titulo del producto **/
        .woocommerce-loop-product__title {
            background-color: {$color_primario}!important;
            text-align: center!important;
            border-radius: .75rem;
            color: #000!important;
            text-align: center!important;
            font-size: 1.5rem!important;
        }

        /** Precio **/
        .woocommerce ul.products li.product .price {
            margin-top: 1rem!important;
            text-align: center!important;
            font-size: 1.5rem!important;
        }

        /** Boton añadir al carrito **/
        .woocommerce ul.products li.product .button {
            display: flex!important;
            justify-content: center!important;
            background-color: {$color_secundario}!important;
        }


        aside .card-meta,
        .bg-secondary,
        .bg-secondary,
        .bg-categorias,
        .alert-secondary,
        .list-group-item-secondary,
        aside .card-footer,
        .comment-body   {
            background-color: {$color_secundario}!important;
        }

        /** Color secciones **/
        .bg-seccion {
            background-color: {$color_secciones}!important;
        }
    ";

    wp_add_inline_style('custom-opciones',  $custom_css );

}