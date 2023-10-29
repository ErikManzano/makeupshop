<?php
// Metaboxes para el home page
add_action( 'cmb2_admin_init', 'makeup_campos_homepage' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function makeup_campos_homepage() {
    $prefix = 'makeup_homepage_';
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$id_home = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$makeup_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Campos Inicio', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    $makeup_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Hero', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para el hero del sitio web', 'cmb2' ),
		'id'      => $prefix . 'texto_hero',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
    $makeup_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero', 'cmb2' ),
		'desc' => esc_html__( 'Imagen del hero de la pagina principal', 'cmb2' ),
		'id'   => $prefix . 'imagen_hero',
		'type' => 'file',
	) );

	// Titulo seccion categorias
	$makeup_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Titulo Categorias', 'cmb2' ),
		'desc'    => esc_html__( 'Añade el titulo para la seccion de las categorias', 'cmb2' ),
		'id'      => $prefix . 'titulo_categoria',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
	
	// Seccion Conoce nuestros productos
	$makeup_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Descripcion 1', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la descripcion 1', 'cmb2' ),
		'id'      => $prefix . 'texto_descripcion_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
    $makeup_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Descripcion 1', 'cmb2' ),
		'desc' => esc_html__( 'Imagen dpara la descripcion 1', 'cmb2' ),
		'id'   => $prefix . 'imagen_descripcion_1',
		'type' => 'file',
	) );

	$makeup_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Descripcion 2', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la descripcion 2', 'cmb2' ),
		'id'      => $prefix . 'texto_descripcion_2',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
    $makeup_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Descripcion 2', 'cmb2' ),
		'desc' => esc_html__( 'Imagen para la descripcion 2', 'cmb2' ),
		'id'   => $prefix . 'imagen_descripcion_2',
		'type' => 'file',

	) );$makeup_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Descripcion 3', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la descripcion 3', 'cmb2' ),
		'id'      => $prefix . 'texto_descripcion_3',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
    $makeup_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Descripcion 3', 'cmb2' ),
		'desc' => esc_html__( 'Imagen para la descripcion 3', 'cmb2' ),
		'id'   => $prefix . 'imagen_descripcion_3',
		'type' => 'file',
	) );

	    // Texto seccion categorias
		$makeup_campos_homepage->add_field( array(
			'name'    => esc_html__( 'Texto Categoria 1', 'cmb2' ),
			'desc'    => esc_html__( 'Añade el texto para la primera parte de las categorias', 'cmb2' ),
			'id'      => $prefix . 'texto_categoria_1',
			'type'    => 'wysiwyg',
			'options' => array(
				'textarea_rows' => 5,
			),
		) );
		$makeup_campos_homepage->add_field( array(
			'name'    => esc_html__( 'Texto Categoria 2', 'cmb2' ),
			'desc'    => esc_html__( 'Añade el texto para la segunda parte de las categorias', 'cmb2' ),
			'id'      => $prefix . 'texto_categoria_2',
			'type'    => 'wysiwyg',
			'options' => array(
				'textarea_rows' => 5,
			),
		) );
		$makeup_campos_homepage->add_field( array(
			'name'    => esc_html__( 'Texto Categoria 3', 'cmb2' ),
			'desc'    => esc_html__( 'Añade el texto para la tercera de las categorias', 'cmb2' ),
			'id'      => $prefix . 'texto_categoria_3',
			'type'    => 'wysiwyg',
			'options' => array(
				'textarea_rows' => 5,
			),
		) );
	
		$makeup_campos_homepage->add_field( array(
			'name' => esc_html__( 'Imagen Categoria 1', 'cmb2' ),
			'desc' => esc_html__( 'Imagen para la primer categoria', 'cmb2' ),
			'id'   => $prefix . 'imagen_categoria_1',
			'type' => 'file',
		) );
		$makeup_campos_homepage->add_field( array(
			'name' => esc_html__( 'Imagen Categoria 2', 'cmb2' ),
			'desc' => esc_html__( 'Imagen para la segunda categoria', 'cmb2' ),
			'id'   => $prefix . 'imagen_categoria_2',
			'type' => 'file',
		) );
		$makeup_campos_homepage->add_field( array(
			'name' => esc_html__( 'Imagen Categoria 3', 'cmb2' ),
			'desc' => esc_html__( 'Imagen para la tercer categoria', 'cmb2' ),
			'id'   => $prefix . 'imagen_categoria_3',
			'type' => 'file',
		) );

}

add_action( 'cmb2_admin_init', 'makeup_campos_galeria' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function makeup_campos_galeria() {
    $prefix = 'makeup_galeria_';
	/**
	 * Metabox to be displayed on a single page ID
	 */
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$makeup_galeria = new_cmb2_box( array(
		'id'           => $prefix . 'nosotros',
		'title'        => esc_html__( 'Galería de imágenes', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => 'true', // Show field names on the left
		'show_on'      => array(
			'key' 	   => 'page-template',
			'value'    => 'page-galeria.php'
		) // Specific post IDs to display this metabox
	) );

	$makeup_galeria->add_field( array(
		'name'         => esc_html__( 'Imagenes', 'cmb2' ),
		'desc'         => esc_html__( 'Cargue las imagenes de la galeria', 'cmb2' ),
		'id'           => $prefix . 'imagenes',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
}
