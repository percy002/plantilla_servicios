<?php 
/*
    Template Name: pagina nosotros
*/

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="pagina-encabezado">
        <div class="">
            <h1>Acerca de Nosotros</h1>
            <p>Conoce mejor nuestra historia y nuestra pasión.</p>
        </div>
    </div>
    <?php 
        if(get_field('mision')) $mision=get_field('mision');
        if(get_field('vision')) $vision=get_field('vision');
        $front_page_id = get_option('page_on_front');
        $logo = get_field('logo', $front_page_id);
    ?>
    <section class="nosotros">
        <div class="nosotros__historia">
            <div class="nosotros__historia__logo">
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            </div>
            <div class="">
                <h2>Nuestra Hitoria</h2>
                <p><?php the_content() ?></p>
            </div>
        </div>
    
        <div class="nosotros__declaracion">
            <div class="nosotros__declaracion__mision">
                <h2>Misión</h2>
                <p><?php echo $mision ?></p>
            </div>
            <div class="nosotros__declaracion__vision">
                <h2>Visión</h2>
                <p><?php echo $vision ?></p>
            </div>
        </div>
        
        
    </section>

<?php endwhile ?>
<?php get_footer() ?>