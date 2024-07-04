<?php 
// consultas reutilizables
require get_template_directory().'/inc/queries.php';

//
// add_action( 'init', function () {
//     remove_post_type_support( 'products', 'editor' );
//     remove_post_type_support( 'products', 'thumbnail' );
//     remove_post_type_support('page', 'editor');
// } );
function mypes_servicios_setup(){

    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // add_image_size('square', 350, 350, true);
    // add_image_size('portrait', 350, 724, true);
    // add_image_size('cajas', 400, 375, true);
    // add_image_size('mediano', 700, 400, true);
    // add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme','mypes_servicios_setup');

//menus de navegacion , agregar mas utilizando el arreglo
function mypes_servicios_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal','mypes_servicios'),
        // 'menu-politicas' => __('Menu Politicas','mypes_servicios'),
        // 'menu-explore' => __('Menu Info','mypes_servicios'),
    ));
}
add_action('init','mypes_servicios_menus');//esta funcion inicia cuando inicia wordpress

//scripts y styles
function mypes_scripts_styles(){
    //cargar css 
    wp_enqueue_style('normalize', get_template_directory_uri().'/assets/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('global', get_template_directory_uri().'/assets/css/global.css', array(), '1.0.0');
    wp_enqueue_style('home', get_template_directory_uri().'/assets/css/home.css', array(), '1.0.0');
    wp_enqueue_style('footer', get_template_directory_uri().'/assets/css/footer.css', array(), '1.0.0');
    wp_enqueue_style('header', get_template_directory_uri().'/assets/css/header.css', array(), '1.0.0');
    wp_enqueue_style('nosotros', get_template_directory_uri().'/assets/css/nosotros.css', array(), '1.0.0');
    wp_enqueue_style('contactos', get_template_directory_uri().'/assets/css/contactos.css', array(), '1.0.0');
    // wp_enqueue_style('product', get_template_directory_uri().'/assets/css/product.css', array(), '1.0.0');
    // wp_enqueue_style('category', get_template_directory_uri().'/assets/css/category.css', array(), '1.0.0');
    // wp_enqueue_style('products-services', get_template_directory_uri().'/assets/css/products-services.css', array(), '1.0.0');
   
    //cargar fuentes

    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,700&family=Quicksand:wght@400;600&family=Raleway:ital,wght@0,300;0,400;1,300&display=swap', array(), '1.0.0');
    
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    //hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googlefonts','fontawesome','global','home','header','footer','nosotros','contactos'), '1.0.0');

    //scripts
    // wp_enqueue_script("materializejs",'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',array(),"1.0.0",true );

    // wp_enqueue_script("fontawesome",'https://kit.fontawesome.com/841e236107.js',array(''),"1.0.0",true );
    wp_enqueue_script('header', get_template_directory_uri().'/assets/js/header.js', array(), '1.0.0');
    wp_enqueue_script('servicios', get_template_directory_uri().'/assets/js/servicios.js', array(), '1.0.0');

    wp_enqueue_script("scripts",get_template_directory_uri().'/assets/js/scripts.js',array('jquery','servicios','header'),"1.0.0",true );
}
add_action('wp_enqueue_scripts','mypes_scripts_styles');

